<?php
use yii\helpers\Html;
use yii\helpers\Url;

$categoryInfos = [];
$currentCategory = '';
foreach ($productInfos as $infos) {
	if (!empty($cateId) && in_array($cateId, array_keys($infos['category']))) {
		$currentCategory = $infos['category'][$cateId];
		break;
	}
}
$showInfos = [];
$sorts = array('seckill', 'auction', 'sale');
$count = 0;
foreach ($sorts as $sort) {
	$showInfos[$sort] = [];
	if (!isset($productInfos[$sort])) {
		continue;
	}

	$products = json_decode($productInfos[$sort]['product'], true);
	$j = 0;
	if ($sort == 'seckill' || $sort == 'auction') {
		$countNeed = 3;
		foreach ($products as $product) {
			if ($j > $countNeed || (!empty($currentCategory) && $product['product_category_id'] != $cateId)) {
				continue;
			}
		    $showInfos[$sort][] = $product;
			$j++;
		}
		$count += $j;
	}
	if ($sort == 'sale') {
		$countNeed = 16 - $count - 1;
		foreach ($products as $product) {
			if ($j > $countNeed || (!empty($currentCategory) && $product['product_category_id'] != $cateId)) {
				continue;
			}
		    $showInfos[$sort][] = $product;
			$j++;
		}
	}
}

$datas = [];
$sortStr = '';
foreach (['seckill' => '秒杀', 'sale' => '特价', 'auction' => '竞拍'] as $sort => $sortName) {
	$infos = $showInfos[$sort];
	$datas = array_merge($datas, $infos);
	if (count($infos) > 0) {
		$sortStr .= $sortName . '·';
	}
}

$elemBrands = [1 => ['', '特价', 'sale'], 2 => ['ms', '秒杀', 'seckill'], 3 => ['jingjia', '竞拍', 'auction']];
?>
<?php echo $this->render('_header', ['info' => $info]); ?>
    <!--页面主体 start-->
    <section class="container" data-page="group-buy-index">
        <!--公司介绍 start-->
        <div class="company-introduction f14">
            <h3 class="f18 cOrange">这里的天是业主的天</h3>
            <p class="cGray"><span>中国装修家居口碑门户</span>第三方业主保障平台</p>
        </div>
        <!--公司介绍 end-->
        <!--团购会 start-->
        <div class="group-buying clearfix f12">
            <p>
			<a href="#"><img src="<?= Yii::getAlias('@asseturl') . '/tuig/images/shoujibanner.jpg?version=20160107'; ?>" alt="<?= $info['groupon_name']; ?>"></a>
            </p>
            <div class="group-buying-content f14">
				<p class="cGray">已报名<span class="cOrange"><?= $info['signup_number']; ?></span>人<span class="fr">比传统市场便宜10%-50%</span></p>
                <p class="mt3">
                    <input type="tel" value="" class="input mobile cMdGray fB f14" placeholder="请输入您的手机号码">
                    <span class="error-tips">您输入的手机号不正确，请重新输入</span>
                </p>
                <p><input type="button" class="btn btn-block btn-orange" id="signup-top" value="免费报名"></p>
				<p><span class="cGray">时间：</span><?= $info['groupon_display_date']; ?></p>
				<p><span class="cGray">地点：</span><?= $info['groupon_address']; ?></p>
            </div>
        </div>
        <!--参展商家 start-->
        <div class="active-process mt3 clearfix">
            <h2 class="title-tag fN cDGray">
                <i></i>活动流程
            </h2>
            <ul>
                <li>
                    <i class="num">1<em class="cFGray ml3">.</em></i><span class="f14">签到<br /><em class="f12 cIGray">领取资料</em></span>
                </li>
                <li>
                    <i class="num">2<em class="cFGray ml3">.</em></i><span class="f14">逛展位<br /><em class="f12 cIGray">了解产品</em></span>
                </li>
                <li>
                    <i class="num">3<em class="cFGray ml3">.</em></i><span class="f14">下单<br /><em class="f12 cIGray">直接签单</em></span>
                </li>
                <li>
                    <i class="num">4<em class="cFGray ml3">.</em></i><span class="f14">秒杀<br /><em class="f12 cIGray">一元秒杀</em></span>
                </li>
                <li>
                    <i class="num">5<em class="cFGray ml3">.</em></i><span class="f14">抽奖<br /><em class="f12 cIGray">现场抽奖</em></span>
                </li>
                <li>
                    <i class="num">6<em class="cFGray ml3">.</em></i><span class="f14">签合同<br /><em class="f12 cIGray">签订合同</em></span>
                </li>
                <li>
                    <i class="num">7<em class="cFGray ml3">.</em></i><span class="f14">点评<br /><em class="f12 cIGray">点评商家</em></span>
                </li>
                <li>
                    <i class="num">8<em class="cFGray ml3">.</em></i><span class="f14">送话费<br /><em class="f12 cIGray">领取话费</em></span>
                </li>
            </ul>
        </div>
        <!--参展商家 end-->
        <!--团购会 end-->
        <!--特价 秒杀 竞拍 start-->
		<?php if (!empty($productInfos)) { ?>
        <div class="pro-activity mt3 clearfix">
            <h2 class="title-tag fN cDGray">
			    <i></i><?= $currentCategory; ?><span class="ml3"><b><?= $sortStr; ?></b></span><span class="m13">千款产品厂家直供，打破行业底价</span>
            </h2>
            <div class="pro-activity-content clearfix f14">
                <ul>
					<?php foreach ($datas as $k => $v) { ?>
					<li data-pid="<?= $v['product_id']; ?>" data-pos="product-<?= $elemBrands[$v['module_type']][2]; ?>">
						<img class="lazy" data-original="<?= $v['attachments_path']; ?>" src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/preload.jpg" alt="<?= $v['product_name']; ?>">
						<p class="mt3 ml3 title"><?= $v['product_name']; ?></p>
						<p class="mt3 ml3"><span class="f16 cPink fB"><em class="f12">￥</em><em class="cur-price"><?= $v['current_price']; ?></em></span>
						    <del class="ml3 f12 cIGray original-price">¥<?= $v['original_price']; ?></del><span class="btn btn-orange fr f14">抢购</span></p>
							<span class="activity-flag <?= $elemBrands[$v['module_type']][0]; ?>"><em><?= $elemBrands[$v['module_type']][1]; ?></em></span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php } ?>
        <!--特价 秒杀 竞拍 end-->
        <!--参展商家 start-->
		<div class="merchant swiper-container clearfix mt3" data-gid="<?= $info['groupon_id']; ?>">
            <h2 class="title-tag fN cDGray">
				<i></i><span class="curent-cate-name"></span><span class="ml3"><b>参展商家</b></span>
                <span class="m13">家装一站购齐 不满意随时退</span>
                <ul class="category fr f14 mr4">
                </ul>
            </h2>
            <div class="merchant-wrap">
                <div class="merchant-content clearfix">
                    <ul class="text-item f14">
                    </ul>
                    <div class="photo-item">
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!--参展商家 end-->
        <?php if (!empty($voucherInfos)) { echo $this->render('_voucher', ['info' => $info, 'voucherInfos' => $voucherInfos, 'cateId' => $cateId]); } ?>
        <?php echo $this->render('_static', ['info' => $info]); ?>

        <!--往期活动 start-->
        <div class="past-activities swiper-container clearfix">
            <h2 class="title-tag fN cDGray">
                <i></i>往期活动
                <span class="fr f12 mt2 mr4">服务<em class="cOrange">57万</em>人  签单<em class="cOrange">210万</em>份  节省约<em class="cOrange">158亿</em>元</span>
            </h2>
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i < 5; $i++) { ?>
                <p class="swiper-slide">
				<a href="<?= Yii::getAlias('@msiteurl'); ?>/tuan/review/<?= $info['groupon_id']; ?>/"><img class="swiper-lazy" data-src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/wqxc-<?= $i; ?>.jpg" alt=""></a>
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                </p>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
		<p class="block-more border-bottom cDGray"><i class="iconfont f16 cOrange">&#xe60f;</i> 免费咨询热线：<span class="cOrange"><?php if (!empty($info['companyInfo']['company_hotline'])) { echo $info['companyInfo']['company_hotline']; } else { echo '400-689-1717'; } ?></span></p>
        <!--往期活动 end-->
    </section>
    <!--页面主体 end-->
    <!--页脚 end-->
	<input type="hidden" name="currentCateId" class="currentCateId" value="<?= $cateId; ?>" />
    <?php echo $this->render('_pop', ['info' => $info, 'grouponNext' => $grouponNext, 'semParams' => $semParams]); ?>
    <script data-main="<?= Yii::getAlias('@asseturl'); ?>/tuig/js/groupBuyMain.js?version=2016011500" src="<?= Yii::getAlias('@asseturlold'); ?>/msite/js/plugin/require.js"></script>
<?php echo $this->render('_footer', ['info' => $info]); ?>
