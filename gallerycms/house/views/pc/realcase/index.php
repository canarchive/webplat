<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
	'provider/pd-channel',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'【装修案例】装修实景案例大全|兔狗家装';
//'装修案例 , 装修实景案例大全 , 兔狗家装';
//'装修案例大全由兔狗家装提供，装修实景案例效果图中每一个装修案例都是装修公司的良心作品。装修选择兔狗家装，就是选择更多优质装修公司!';
$infos[] = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
?>
<div class="banner">
	<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/case_banner.jpg">
</div>
<div class="pd-main">
    <div class="pd-main-body pd-channel">
        <div class="crumbs"></div>
        <!-- 实景案例 -->
        <div class="pd-realcase active">
            <div class="pd-rc-case">
                <div class="pd-showcase">
                    <?php for ($i = 1; $i < 20; $i++) { foreach ($infos as $info) { ?>
					<a href="<?= Url::to(['/house/realcase/show', 'id' => $info['id']]); ?>" target="_blank">
                        <div class="case-item">
                            <div><img class="case-img" src="http://pic.tugou.com/realcase/1466763930_2447433.jpeg@177h_299w_1e_1c" alt="<?= $info['name']; ?>"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
								    <p class="ch-case-title"><?= $info['name']; ?></p>
                                    <p class="ch-case-info">
                                        <span role="construction">别墅</span>
                                        <span role="style">美式</span>
										<span role="detail">半包30万</span>
                                    </p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">314</p></div>
                            </div>
                        </div>
                    </a>
                    <?php } } ?>
                </div>
                <div class="page">
                    <p>
                        <a class="btnpage on">1</a>
                        <a class="btnpage" href="/realcase/p_2/">2</a>
                        <a class="btnpage" href="/realcase/p_3/">3</a>
                        <a class="btnpage" href="/realcase/p_4/">4</a>
                        <a class="btnpage" href="/realcase/p_5/">5</a>
                        <a href="/realcase/p_2/">下一页</a>
                        <a href="/realcase/p_11/">末页</a>
                    </p>
                </div>
            </div>
        </div>
        <div id="pd-fault-footer"></div>
    </div>
</div>
<?php echo $this->render('../common/_pop_mask', []); ?>
<?php echo $this->render('../common/_signup', []); ?>
