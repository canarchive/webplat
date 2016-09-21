<?php
namespace spider\house\models;

use Yii;
use Goutte\Client;

class To8toSpider
{
    private $configInfo;
    protected $category = [];//网站文章分类
    protected $baseUrl = '';//网站域名
    protected $name = '';//网站名称

    /**
     * 构造方法，初始化采集网站属性
     */
	public function __construct()
	{
		$this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }

    /**
     * 获取当前网站指定分类的分页
     * @return array
     */
	private function getPages($pageUrl, $category)
	{
        $client = new Client();
        $crawler = $client->request('GET', $pageUrl);
        //获取分页
        $crawler->filter('.media-list .pagination li a')->each(function ($node) use($pageUrl,$category) {
            if($node){
               try{
                   $this->_url[] = $this->baseUrl.trim($node->attr('href'));
               }catch(\Exception $e){
                   $this->addLog($pageUrl,$category,false,$e->getMessage());
               }
            }
        });
        return array_unique($this->_url);
    }

    /**
     * 获取每页的文章列表中文章URL和发布时间
     * @param $category
     * @param $url
     */
    private function urls($category,$url){
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $crawler->filter('.media-list .media')->each(function ($node) use($category,$url) {
            if($node){
               try{
                   $a = $node->filter('.media-body .media-heading a');
                   if($a){
                       $u = $this->baseUrl.trim($a->attr('href'));
                       if(!$this->isGathered($u)){
                           $this->enqueue($category,$u,'yiichina');
                       }
                   }
               }catch(\Exception $e){
                   $this->addLog($url,$category,false, $e->getMessage());
               }
            }
        });
    }

    /**
     * 获取指定url的文章标题、内容、发布时间
     * @param $url
     * @param $category
     * @return string
     */
    public function getContent($url,$category){
        $client = new Client();
        $crawler = $client->request('GET', $url);
        $node = $crawler->filter('.col-lg-9')->eq(0);
        if($node){
            try{
                $title = $node->filter('.page-header h1');
                $time = $node->filter('.action .time');
                if($title && $time){
                    $title = trim($title->text());
                    $content = $node->html();
                    $time = $time->text();
                    return json_encode(['title'=>$title,'content'=>$content,'time'=>$time]);
                }
            }catch(\Exception $e){
                $this->addLog($url,$category,false,$e->getMessage());
            }
        }
        return '';
    }
    /**
     * 判断文章是否采集
     * @param $url
     * @return bool
     */
	protected function isGathered($url)
	{
        $gather = Gather::find()->where(['url' => md5(trim($url)), 'res' => true])->one();
        return $gather ? true : false;
    }

    /**
     * 插入URL队列
     * @param $category
     * @param $url
     * @param $className
     * @param string $publishTime
     */
	public function enqueue($category, $url, $className, $publishTime = '')
	{
		$params = [
			'category' => $category,
			'url' => $url,
			'className' => $className,
			'publishTime' => $publishTime
		];
        \Resque::enqueue('article_spider', 'spider\models\ArticleJob', $params);
    }

    /**
     * 将文章插入数据库
     * @param $title
     * @param $content
     * @param $publish_at
     * @param $tag
     * @return bool
     */
	public static function insert($title, $content, $publish_at, $tag = '')
	{
        //插入标签（搜索的分类）
        $article = new Article();
        $article->title = $title;
        $article->content = $content;
        $article->author = 'yang';
        $article->status = Article::STATUS_GATHER;
        $article->publish_at = $publish_at;
        $res = $article->save(false);
        if ($tag) {
            try{
                $tagModel = Tag::find()->where(['name' => $tag])->one();
                if(!$tagModel){
                    $tagModel = new Tag();
                    $tagModel->name = $tag;
                    $tagModel->article_count = 0;
                    $tagModel->save(false);
                }
                $articleTag = new ArticleTag();
                $articleTag->article_id = $article->id;
                $articleTag->tag_id = $tagModel->id;
                $articleTag->save(false);
            }catch(\Exception $e){
                echo $e->getMessage().PHP_EOL;
            }
        }
        return $res ? true : false;
    }

    /**
     * 采集日志
     * @param $url
     * @param $category
     * @param $res
     * @param $result
     */
	public function addLog($url, $category, $res, $result)
	{
        $gather = new Gather();
        $gather->name = $this->name;
        $gather->category = $category;
        $gather->url = md5($url);
        $gather->url_org = $url;
        $gather->res = $res;
        $gather->result = $result;
        $gather->save();
    }
}
