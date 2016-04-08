<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$model->brand_code = $model->getBrandCode();
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'parent_id')->dropDownList($model->selectInfos, ['prompt' => Yii::t('admin-common', 'Select Category Parent')]); ?>
    <?= $form->field($model, 'brand_code')->dropDownList($model->brandInfos, ['multiple' => 'multiple', 'prompt' => Yii::t('admin-common', 'Select Brand')]); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
