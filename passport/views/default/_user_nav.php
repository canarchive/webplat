<?php
use yii\helpers\Url;
$passportUrl = Yii::getAlias('@passporturl');
$paytradeUrl = Yii::getAlias('@paytradeurl');

$actions = [
	/*'index' => [
		'name' => '个人首页',
		'url' => $passportUrl . Url::to(['site/index']),
	],*/
	'setting' => [
		'name' => '账号信息',
		'url' => $passportUrl . Url::to(['info/setting']),
	],
	'address' => [
		'name' => '地址管理',
		'url' => $passportUrl . Url::to(['user-address/index']),
	],
	/*'myorder' => [
		'name' => '我的订单',
		'url' => $paytradeUrl . Url::to(['myinfo/order']),
	],
	'coupon' => [
		'name' => '优惠券',
		'url' => $paytradeUrl . Url::to(['myinfo/coupon']),
	],*/
]
?>
<ul class='breadcrumb'>
    <li>
	    <a href='<?= Yii::getAlias('@shooturl'); ?>'>首页<span>/</span></a>
    </li>
	<li><?= $actions[$currentAction]['name']; ?></li>
</ul>
<div class='myOppo-menu'>
    <h1 class='h-gamma'><?= $actions[$currentAction]['name']; ?></h1>
    <ul class='navigation'>
		<?php foreach ($actions as $actionKey => $actionInfo) { ?>
		<li <?php if ($actionKey == $currentAction) { echo 'class="is-active"'; } ?>>
		    <a href='<?= $actionInfo['url']; ?>'><?= $actionInfo['name']; ?></a>
        </li>
        <?php } ?>
    </ul>
</div>
