<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort_big')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'groupon_id')->dropDownList($model->grouponInfos, ['prompt' => Yii::t('admin-common', 'Select Groupon')]); ?>
    <?= $form->field($model, 'order_range')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
