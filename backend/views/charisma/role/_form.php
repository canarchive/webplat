<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="auth-item-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>
    <?= $form->field($model, 'ruleName')->dropDownList(['a' => 'b', 'c' =>'d'], ['prompt'=>'Select...']); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>

    <?php ActiveForm::end(); ?>
</div>
