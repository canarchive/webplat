<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'code'); ?>
    <?= $form->field($model, 'parent_code')->dropDownList($model->selectInfos, ['prompt' => Yii::t('admin-common', 'Select Menu Parent')]); ?>
    <?= $form->field($model, 'module')->dropDownList($model->moduleInfos, ['prompt' => Yii::t('admin-common', 'Select Menu Module')]); ?>
    <?= $form->field($model, 'controller'); ?>
    <?= $form->field($model, 'method'); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'display')->dropDownList($model->displayInfos); ?>
    <?= $form->field($model, 'extparam'); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>

</div>
