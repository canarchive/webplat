<?php
use yii\helpers\Url;
?>
<div class="total-bg"></div>
<div class="total">
    <div class="total-con">
        <div class="total-left">
            <div class="total-off"></div>
        </div>
        <div class="total-right">
            <p class="total-logo"></p>
            <ul class="total-menu">
                <li>
					<a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>" class="total-one">首页</a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/mobile-sample/index']); ?>" class="total-two">装修案例</a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/mobile-realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="total-three">实景作品</a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="total-four">装修公司</a>
                </li>
                <li>
			        <a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'yanfang', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="total-five">免费服务</a>
                </li>
            </ul>
        </div>
    </div>
</div>
