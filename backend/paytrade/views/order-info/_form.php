<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'user_id')->textInput(); ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'goods_id')->dropDownList($model->goodsInfos, ['prompt' => Yii::t('admin-common', 'Select goods')]); ?>
    <?= $form->field($model, 'pay_money')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'service_start')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#orderinfo-service_start').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'service_hour_num')->textInput() ?>
    <?= $form->field($model, 'consignee')->textInput() ?>
    <?= $form->field($model, 'mobile')->textInput() ?>
    <?= $form->field($model, 'address')->textInput() ?>
	<?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
