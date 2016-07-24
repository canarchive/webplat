<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'code'); ?>
    <?= $form->field($model, 'parent_code')->dropDownList($model->selectInfos, ['prompt' => Yii::t('admin-common', 'Select Region Parent')]); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
