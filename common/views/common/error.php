<?php
use yii\helpers\Url;

$referrer = Yii::$app->request->referrer;
$referrer = strpos($referrer, Yii::$app->params['baseDomain']) !== false ? $referrer : '';
?>
<html class='no-js'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
<meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
</head>
<body>

<style type="text/css">

body {
    background-color: #f1f2f7;
    color: rgba(118, 118, 118, 1.0);
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-size: 14px;

    margin: 0;
    line-height: 23px;
    font-style: normal;
    font-weight: normal;
    min-height: 100%;
}
.page_error_code {
    text-align: center;
    display: block;
    width: 100%;
    font-size: 60px;
    line-height: 80px;
    font-weight: 140;
    margin: 50px 0 0 0;
    color: rgba(31, 181, 172, 1);
}
.page_error_info {
    text-align: center;
    display: block;
    width: 100%;
    font-size: 40px;
    line-height: 40px;
    color: #aaaaaa;
    font-weight: 400;
    margin: 15px 0;
}
.page_error_btn {
    margin: 50px 0 0 0;
    text-align: center;
}
.btn.btn-lg, .btn-lg, .btn-group-lg>.btn {
    padding: 15px 21px;
    text-decoration: none;
}
.btn.btn-primary {
    background: rgba(31, 181, 172, 1.0);
    color: #ffffff;
}
.btn-primary:hover,.btn-primary:focus {
    background: rgba(1,151,142, 1.0);
}
.btn-primary:active,.btn-primary.active {
    background: rgba(1,151,142, 1.0);
}
</style>

<div class="">
    <h1 class="page_error_code text-primary"><?= $name; ?></h1>
    <h1 class="page_error_info"><?= $message; ?></h1>
    <div class="text-center page_error_btn">
	    <a class="btn btn-primary btn-lg" href='<?= Yii::getAlias('@shooturl'); ?>'>
			<i class='fa fa-location-arrow'></i> &nbsp; 返回首页
        </a>&nbsp;
        <?php if (!empty($referrer)) { ?>
	    <a class="btn btn-primary btn-lg" href='<?= $referrer; ?>'>
			<i class='fa fa-location-arrow'></i> &nbsp; 返回上一页
        </a>
        <?php } ?>
    </div>
</div>

</body>
</html>
