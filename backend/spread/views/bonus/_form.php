<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'decoration_id')->dropDownList($model->decorationInfos, ['prompt' => Yii::t('admin-common', 'Select Decoration')]); ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'limit_day')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
		
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
