<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles'];
$this->params['controllerForJs'] = 'ProductsController@index';
?>
<main class='main-content'>
    <div class="product-index">
        <div class='wrapper'>
            <ul class='breadcrumb'>
                <li>
				    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
                        首页<span>/</span>
                    </a>
                </li>
                <li>产品</li>
            </ul>
        </div>
        <?php echo $this->render('_list_slice', ['infos' => $positionDatas]); ?>
     
        <div class="tabs-blank">
        </div>
        <ul class="tabs-mobile font-normal">
            <?php $i = 1; foreach ($infos as $catId => $info) { ?>
			<li class="tab" id="tab-<?= $i; ?>"><?= $info['name']; ?></li>
            <?php $i++; } ?>
        </ul>
        <div class="box-products">
            <div class="wrapper">
                <div class="desk-title">摄到家 产品系列</div>
                <?php $i = 1; foreach ($infos as $catId => $info) { ?>
                <div class="brick-name">
                    <div class="pull-left">
                        <span class="serial-slogan">
						    <span class="serial-name"><?= $info['name']; ?></span>
							&nbsp;&nbsp;&nbsp;&nbsp;<?= $info['brief']; ?>
                        </span>
                    </div>
                    <div class="pull-right">
                        <span class="">
                            <!--<a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=3" class="oppo-tj" target="_blank">
                                查看更多
                            </a>-->
                        </span>
                        <!--<span class="icon-more">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=3" target="_blank" class="oppo-tj" >
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-more.png">
                            </a>
                        </span>-->
                    </div>
                </div>
                <div class="brick-list">
                    <?php $skip = false; $j = 1; foreach ($info['datas'] as $id => $data) { ?>
					<div class="brick-item <?php if (empty($skip)) { echo 'serial'; } if ($j % 4 == 0) { echo 'brick-item-last'; } ?>" id="<?php if (empty($skip)) { echo "serial-$i"; } ?>">
					    <a href="<?= Url::to(['goods/show', 'id' => $id]); ?>" class="oppo-tj" target="_blank">
                            <div class="brick-img">
							    <img src="<?= $data['main_photo']; ?>">
                            </div>
                            <div class="brick-content">
							    <!--<div class="brick-title"><?= $data['name']; ?></div>-->
								<p class="brick-desc"><?= $data['name']; ?></p>
								<a class="brick-learn-more font-normal oppo-tj" href="<?= Url::to(['goods/show', 'id' => $id]); ?>">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <?php $skip = true; $j++; } ?>
                </div>
                <div class="brick-mobile-more">
                    <!--<span class="font-normal">
                        <a href="" class="oppo-tj">
                            &nbsp;&nbsp;R系列更多产品&nbsp;&nbsp;&gt;&gt;
                        </a>
                    </span>-->
                </div>
                <?php $i++; } ?>
            </div>
        </div>
    </div>
</main>
