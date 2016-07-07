<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'pages/meitu/common',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'【装修案例效果图】装修案例图片_装修设计案例-兔狗装修效果图';
//'装修案例效果图,装修案例图片,装修设计案例';
//'兔狗装修案例效果图专区,提供最新装修案例图片,装修设计案例包括简约,现代,中式,欧式,美式,田园等装修效果图';
$infos[] = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
?>
<style rel="stylesheet">
.page_header img, .page_footer img { display: inline; } 
.page_header, .page_footer_links { font-size: 12px; }
</style>
<script type="text/javascript">
$(function() {
    setCookie('page_flag', 'meitu');
});
</script>
<div class="wp">
    <div class="cont">
        <div class="main">
            <div class="crumbs">
                <a href="/">装修效果图</a>
                <span class="sep">&gt;</span>
                <a href="/case/">装修案例</a>
                <span class="sep last">&gt;</span></div>
            <div class="filter">
                <dl class="filterlist filterlist-first clearfix">
                    <dt>户型：</dt>
                    <dd>
                        <div class="uwbox">
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a55/" data-housetype="55">小户型</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a56/" data-housetype="56">一居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a57/" data-housetype="57">二居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a58/" data-housetype="58">三居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a59/" data-housetype="59">四居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a60/" data-housetype="60">复式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a61/" data-housetype="61">别墅</a></span>
                            <!-- --></div>
                    </dd>
                </dl>
                <dl class="filterlist clearfix">
                    <dt>面积：</dt>
                    <dd>
                        <div class="uwbox">
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b62/" data-area="62">30㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b63/" data-area="63">40㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b64/" data-area="64">50㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b65/" data-area="65">60㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b91/" data-area="91">70㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b92/" data-area="92">80㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b93/" data-area="93">90㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b94/" data-area="94">100㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b95/" data-area="95">110㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b96/" data-area="96">120㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b97/" data-area="97">130㎡以上</a></span>
                            <!-- --></div>
                    </dd>
                </dl>
                <dl class="filterlist clearfix">
                    <dt>风格：</dt>
                    <dd>
                        <div class="uwbox">
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c66/" data-style="66">简约</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c67/" data-style="67">现代</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c68/" data-style="68">欧式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c69/" data-style="69">中式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c70/" data-style="70">田园</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c71/" data-style="71">地中海</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c72/" data-style="72">美式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c73/" data-style="73">混搭</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c74/" data-style="74">宜家</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c75/" data-style="75">简欧</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c76/" data-style="76">新古典</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c77/" data-style="77">东南亚</a></span>
                            <!-- -->
                            <span class="uw" style="display: none">
                                <a href="http://meitu.tugou.com/case-c112/" data-style="112">北欧</a></span>
                            <!-- -->
                            <span class="uw" style="display: none">
                                <a href="http://meitu.tugou.com/case-c113/" data-style="113">新中式</a></span>
                            <!-- -->
                            <span class="uw" style="display: none">
                                <a href="http://meitu.tugou.com/case-c114/" data-style="114">日式</a></span>
                            <!-- --></div>
                    </dd>
                </dl>
                <dl class="filterlist clearfix">
                    <dt>色系：</dt>
                    <dd>
                        <div class="ccbox">
                            <a class="cc-1" href="http://meitu.tugou.com/case-d78/" data-color="78" title="白色">白色</a>
                            <a class="cc-2" href="http://meitu.tugou.com/case-d79/" data-color="79" title="米色">米色</a>
                            <a class="cc-3" href="http://meitu.tugou.com/case-d80/" data-color="80" title="黄色">黄色</a>
                            <a class="cc-4" href="http://meitu.tugou.com/case-d81/" data-color="81" title="橙色">橙色</a>
                            <a class="cc-5" href="http://meitu.tugou.com/case-d82/" data-color="82" title="红色">红色</a>
                            <a class="cc-6" href="http://meitu.tugou.com/case-d83/" data-color="83" title="粉色">粉色</a>
                            <a class="cc-7" href="http://meitu.tugou.com/case-d84/" data-color="84" title="绿色">绿色</a>
                            <a class="cc-8" href="http://meitu.tugou.com/case-d85/" data-color="85" title="蓝色">蓝色</a>
                            <a class="cc-9" href="http://meitu.tugou.com/case-d86/" data-color="86" title="紫色">紫色</a>
                            <a class="cc-10" href="http://meitu.tugou.com/case-d87/" data-color="87" title="黑色">黑色</a>
                            <a class="cc-11" href="http://meitu.tugou.com/case-d88/" data-color="88" title="灰色">灰色</a>
                            <a class="cc-12" href="http://meitu.tugou.com/case-d89/" data-color="89" title="原木色">原木色</a>
                            <a class="cc-13" href="http://meitu.tugou.com/case-d90/" data-color="90" title="彩色">彩色
                                <i class="cc-13-1"></i>
                                <i class="cc-13-2"></i>
                                <i class="cc-13-3"></i>
                                <i class="cc-13-4"></i>
                            </a>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="showlist">
                <ul class="showlist-ul clearfix">
                    <?php for ($i = 1; $i < 20; $i++) { foreach ($infos as $info) { ?>
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
							    <a href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160705165013_8360.jpeg@211h_280w_1e_1c" alt="混搭风格别墅装修案例欣赏" />
									<span>7张</span>
                                </a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
									<a class="handler-price" href="javascript:;">免费获取报价</a>
                                </div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
									<a href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>" target="_blank" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="page">
                <p>
                    <a class="btnpage on">1</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_2/">2</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_3/">3</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_4/">4</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_5/">5</a>
                    <a href="http://meitu.tugou.com/case/p_2/">下一页</a>
                    <a href="http://meitu.tugou.com/case/p_54/">末页</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="pop hide">
    <div class="popmain">
        <div class="popform apply_form">
            <h3>
                <!--免费获取报价--></h3>
            <p class="pop-tip">
                <!--10秒轻松获取3套报价方案--></p>
            <input name="apply_type" type="hidden" value="18" />
            <input name="item_id" type="hidden" value="" />
            <input class="inptxt" name="name" type="text" placeholder="您的姓名" />
            <input class="inptxt" name="phone" type="text" placeholder="手机号码" />
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input class="btn" name="apply" type="button" value="立即预约" />
            <!--<p style="line-height: 20px; color: #999;">注：每户业主可同时获取3份设计比较，挑选适合方案后个性化修改</p>--></div>
        <a class="btn-popclose" href="javascript:;" onclick="hidePopMask($('.pop'));">关闭</a></div>
</div>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
    })</script>

<script type="text/javascript" src="http://static.tugou.com/js/meitu.js"></script>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
        bindFilter();
    });</script>
<?php echo $this->render('../common/_signup', []); ?>
