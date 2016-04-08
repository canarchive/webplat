<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<div class="bd_bottom_ea">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo f_l"><a href="<?= Yii::getAlias('@websiteurl'); ?>"><img alt="" src="<?= Yii::getAlias('@asseturl'); ?>/website/basey/images/logo.png?v="></a></div>
        <div class="f_r">
            <ul class="sizeZero merchant_info_box">
                <li class="inline mg_l40 mg_t40">
                    <span class="inline col_8c8">欢迎来到这里，请 </span><span class="col_8c8 inline mg_l5">登录 </span><span class="col_8c8 mg_l5 mg_r5 inline">|</span><a class="col_8c8 inline" href="<?= Url::to(['site/signup']); ?>">注册</a> 
                </li>
            </ul>
        </div>
    </div>
</div>
