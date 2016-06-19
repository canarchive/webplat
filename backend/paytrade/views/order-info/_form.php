<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'pay_money')->textInput() ?>
    <?= $form->field($model, 'goods_id')->dropDownList($model->goodsInfos, ['prompt' => Yii::t('admin-common', 'Select Goods')]); ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
