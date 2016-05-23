<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\ueditor\UEditor;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'code'); ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => Yii::t('admin-common', 'Select Sort')]); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'template')->dropDownList($model->templateInfos, ['prompt' => Yii::t('admin-common', 'Select Template')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
	<?= $form->field($model, 'content')->widget(UEditor::className(),[]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
