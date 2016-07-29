<?php
use yii\helpers\Url;
?>
<div class="pd-buildfield active" id="content-working">
    <?php foreach ($infos as $info) { ?>
    <div class="pd-bd-case">
        <div class="pd-bd-userinfo">
            <div class="user-header">
			    <a href="<?= Url::to(['/house/decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
					<img alt="用户头像" src=" http://img.tugou.com/company/face03.png" class="pd-bd-user">
                </a>
				<p class="pd-bd-status"><span></span><?= $info['status']; ?></p>
            </div>
            <div class="user-profile">
                <p>
					<a href="<?= Url::to(['/house/working/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-btn" role="user-name"><?= $info['owner_name']; ?></a>
                </p>
                <p>
				    <a role="building"><?= $info['community_name']; ?></a>
					<a role="area"><?= $info['area']; ?>m²</a>
					<a role="detail"><?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</a>
					<a role="style"><?= $info['style']; ?></a>
                </p>
                <a class="pd-btn pd-bd-booking free-order-pop">免费预约看工地</a></div>
        </div>
        <div class="pd-bd-userimg">
            <div>
                <a href="/site/831.html">
                    <img alt="施工图" src="http://pic.tugou.com/buildingdiary/1466591566_01100.jpeg@129w_129h_1e_1c" class="img-item"></a>
                <a href="/site/831.html">
                    <img alt="施工图" src="http://pic.tugou.com/buildingdiary/1466591843_5538324.jpeg@129w_129h_1e_1c" class="img-item"></a>
                <a href="/site/831.html">
                    <img alt="施工图" src="http://pic.tugou.com/buildingdiary/1466591881_3681808.jpeg@129w_129h_1e_1c" class="img-item"></a>
            </div>
            <p>严格按照设计图纸进行制作，吊顶高度适中，基层清洁和底子灰结合牢固，无空鼓。</p>
        </div>
    </div>
    <?php } ?>
    <div class="page">
        <p></p>
    </div>
</div>
