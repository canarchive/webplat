<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'dpl', 'success',
];
$this->params['jsFiles'] = [
    'jquery', 'common',
];
?>
<div class="toptitle">
    <a href="<?= Url::to(['/house/mobile-site/select-city']); ?>">
        <div class="position"><?= Yii::$app->params['currentCompany']['name']; ?></div>
    </a>
</div>
<div class="success">
    <h1>预约成功</h1>
    <p class="success-p">请保持手机畅通哦，装修管家会在24小时内联系您哦！</p>
    <a href="/" class="return">返回首页</a>
    <div class="code">
	    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" alt="app下载">
        <p><a href="javascript: void(0);" class="explain">关注官方微信号</a></p>
    </div>
</div>
