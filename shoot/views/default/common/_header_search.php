<?php
use yii\helpers\Url;

$returnUrl = Yii::$app->request->hostInfo . Yii::$app->request->getUrl();
?>
    <div class='nav-sub-menu'>
        <div class='relative'></div>
    </div>
    <div class='nav-search-mask'></div>
    <div class='nav-search'>
        <div class='nav-search-container'>
            <div class='nav-search-content'>
                <div class='nav-search-input'>
				    <form action='<?= Yii::getAlias('@shooturl') . Url::to(['/search']); ?>' class='main-form'>
                        <input placeholder='搜索摄影产品' type='text' name="q">
                        <button class='button' type='submit'>搜索</button>
                        <a href='#' class='nav-search-close'>取消</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="languages-panel"></div>
