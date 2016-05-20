<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
	<?= $form->field($model, 'company_id')->dropDownList(
		$model->companyInfos, 
		[
			'prompt' => Yii::t('admin-common', 'Select Company'),
            'onchange'=>'$.post("' . Url::to(['business-order/listinfo']) . '?action=grouponInfos&company_id=' . '"+$(this).val(),function(data){
                var htmlContent = "";
                $.each(data, function(i, v) {
                    htmlContent += "<option value=\"" + i + "\">" + v + "</option>";
                });

                $("#groupon_id").html(htmlContent);
            });',
		]
	); ?>
	<?= $form->field($model, 'groupon_id')->dropDownList(
		$model->grouponInfos,
		[
			'prompt' => Yii::t('admin-common', 'Select Groupon'),
			'id' => 'groupon_id',
		]
	); ?>
    <?= $form->field($model, 'order_prefix')->textInput() ?>
    <?= $form->field($model, 'order_start')->textInput() ?>
    <?= $form->field($model, 'order_end')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
