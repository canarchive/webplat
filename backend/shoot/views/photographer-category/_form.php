<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'photographer_id')->dropDownList($model->photographerInfos, ['prompt' => Yii::t('admin-common', 'Select photographer')]); ?>
    <?= $form->field($model, 'category_id')->dropDownList($model->categoryInfos, ['prompt' => Yii::t('admin-common', 'Select Category')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
		
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
