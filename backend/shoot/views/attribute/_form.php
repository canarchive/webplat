<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
		
    <?= $form->field($model, 'type_id')->dropDownList($model->typeInfos, ['prompt' => Yii::t('admin-common', 'Select Type')]); ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'values')->textarea(['rows' => 2]) ?>
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
