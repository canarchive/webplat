<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;
use spread\models\CustomService;

$attachmentModel = new Attachment();
$mainPhoto = $attachmentModel->getFieldInfos('goods', 'main_phone');
$pitcture = $attachmentModel->getFieldInfos('goods', 'main_phone');
if ($this->context->isService) {
	$customInfos = ArrayHelper::map($this->context->serviceInfos, 'id', 'name');
} else {
	$customInfos = ArrayHelper::map(CustomService::find()->select('id, name')->where(['status' => 1])->all(), 'id', 'name');
}

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'mobile')->textInput() ?>
    <?= $form->field($model, 'city_code')->dropDownList($model->companyInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'signup_channel')->dropDownList($model->signupChannelInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'service_id')->dropDownList($customInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
