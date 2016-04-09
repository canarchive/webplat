<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
