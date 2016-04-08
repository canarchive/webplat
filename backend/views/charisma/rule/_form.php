<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="auth-item-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>
    <?= $form->field($model, 'className')->dropDownList($model->ruleClasses); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
<?php ActiveForm::end(); ?>
</div>
