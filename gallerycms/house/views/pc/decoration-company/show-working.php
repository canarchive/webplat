<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-real',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-real',
];
$this->params['currentNav'] = 'company';
$this->params['friendLink'] = true;

$this->params['showPage'] = true;
//print_R($info);exit();
$merchantInfo = $info->merchantInfo;
$statusDatas = $info->statusDatas;
?>
<?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
<div class="pd-header">
    <div class="crumbs">
	    <a href="/">团家汇</a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修公司</a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $merchantInfo['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>"><?= $merchantInfo['name']; ?></a><span class="sep">&gt;</span>
        <a>直播工地</a><span class="sep">&gt;</span>
		<a ><span class="btn-crumbs"><?= $info['owner_name']; ?>的家<i class="i-del"></i></span></a>
    </div>
</div>
<div class="pd-main">
    <div class="pd-step">
        <div class="pd-user-basic">
            <img class="user-head" src=" http://img.tugou.com/company/face03.png" alt="用户头像">
            <div class="user-info">
                <p><a role="name"><?= $info['owner_name']; ?>的家</a></p>
                <p>
				    <a role="building"><?= $info['community_name']; ?></a>
					<a role="area"><?= $info['area']; ?>m&sup2;</a>
					<a role="prod-category"><?= $info['decoration_type']; ?></a>
					<a role="price"><?= $info['decoration_price']; ?>万</a>
					<a role="style"><?= $info['style']; ?></a>
                </p>
                <!--<p>项目经理:
                    <a role="manager">舒经理</a>监理师傅:
                    <a role="monitor">周师傅</a>装修管家:
					<a role="keeper">小南</a>
                </p>-->
            </div>
        </div>
        <div class="pd-user-home">
            <div class="pd-uh-main">
                <?php $i = 0; foreach ($info->statusInfos as $statusKey => $statusValue) { $statusData = isset($statusDatas[$statusKey]) ? $statusDatas[$statusKey] : false; if (empty($statusData)) { continue; } ?>
				<div step-id="<?= $i; ?>" id="pd-<?= $statusKey; ?>">
                    <div class="pd-step-title">
                        <div class="pd-step-spinner active">
                            <span class="icon-point active"></span>
                            <span class="icon-down"></span>
							<a><?= $statusValue; ?></a>
                        </div>
                    </div>
                    <?php foreach ($statusData as $sData) { ?>
                    <div step-sequence="0" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
							<a role="substep"><?= $sData['name']; ?></a>
							<a role="time"><?= $sData['start_time']; ?></a>
                        </div>
                        <div class="pd-img-list">
                            <?php foreach ($sData['picture_living'] as $living) { ?>
							<img src="<?= $living['url']; ?>" alt="施工图片">
                            <?php } ?>
                        </div>
						<p class="pd-step-desc"><?= $sData['description']; ?></p>
                    </div>
                    <?php } ?>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
    </div>
    <div class="pd-step-menu">
        <div class="pd-menu">
            <?php foreach ($info->statusInfos as $statusKey => $statusValue) { ?>
			<div class="menu-item menu-item-<?= $statusKey; ?> alternative pd-btn">
			    <a href="#pd-<?= $statusKey; ?>"><?= $statusValue; ?>阶段</a>
                <span class="menu-arrow">
                    <a class="arrow arrow_down"></a>
                </span>
            </div>
            <?php } ?>
        </div>
        <div class="pd-contact-us">
            <span class="pd-line-arrow"></span>
            <img src="http://img.tugou.com/provider/ewm-hangzhou.jpg" alt="兔狗二维码">
            <p class="sm">快扫我!!! <br>立即看到你家的装修进度</p>
        </div>
    </div>
</div>
<style type="text/css">.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }</style>
