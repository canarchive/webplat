<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\ueditor\Ueditor;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
	<?= $form->field($model, 'content')->widget(Ueditor::className(),[]) ?>
		
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
