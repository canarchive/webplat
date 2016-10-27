<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->merchantInfos, ['prompt' => Yii::t('admin-common', 'Select Merchant')]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'bank_name')->dropDownList($model->bankNameInfos, ['prompt' => Yii::t('admin-common', 'Select Bank Name')]); ?>
    <?= $form->field($model, 'bank_opening')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'bank_account')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'typeInfos')->dropDownList($model->typeInfos, ['prompt' => Yii::t('admin-common', 'Select Type')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'statusInfos')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
