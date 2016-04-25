<?php
use yii\helpers\Url;

$returnUrl = Yii::$app->request->hostInfo . Yii::$app->request->getUrl();
?>
<header class='main-header'>
    <?= $this->render('@shoot/views/default/common/_header_upper_area'); ?>
    <div class='bottom-area'>
        <div class='wrapper'>
            <a class='js-open-menu' href='#'>
                <i class='js-open-menu-bar'></i>
            </a>
            <div class='logo logo-extend'>
			    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
				    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/oppo_logo.png" alt="">
                </a>
            </div>
            <a class='js-open-user' href='#'>
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-menu-user.png" alt="">
            </a>
            <?= $this->render('@shoot/views/default/common/_header_menu'); ?>
        </div>
    </div>
    <?= $this->render('@shoot/views/default/common/_header_search'); ?>
</header>
