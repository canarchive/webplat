<?php

use yii\bootstrap\NavBar;
use backend\assets\CharismaAsset;
use backend\assets\Ltie9Asset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

CharismaAsset::register($this);
Ltie9Asset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
	<link id="bs-css" href="<?= Yii::getAlias('@asseturl/backend'); ?>/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?= Yii::getAlias('@asseturl'); ?>/bower_components/jquery/jquery.min.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/backend'); ?>img/favicon.ico">

    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="ch-container">
    <div class="row">
        <div class="col-md-12 center login-header"><h2>Welcome to Charisma</h2></div>
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">Please login with your Username and Password. </div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->label('Name') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
