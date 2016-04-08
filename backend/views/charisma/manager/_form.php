<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->roles = $model->getRoles();
$model->password = '';
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php if ($model->scenario == 'edit-password') { ?>
    <?= $form->field($model, 'oldpassword')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => 255]) ?>
    <?php } else if ($model->scenario == 'edit-info') { ?>
    <?= $form->field($model, 'truename')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'mobile') ?>
    <?php } else { ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'roles')->dropDownList($model->roleInfos, ['multiple' => 'multiple', 'prompt' => Yii::t('admin-common', 'Select Role')]); ?>
    <?= $form->field($model, 'truename')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'mobile') ?>
    <?php if ($model->scenario == 'update') { ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?php } ?>
    <?php } ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>

</div>
