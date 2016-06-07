<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$mainPhoto = $attachmentModel->getFieldInfos('goods', 'main_phone');
$pitcture = $attachmentModel->getFieldInfos('goods', 'main_phone');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/spread-upload/index', 'table' => 'groupon', 'field' => 'picture', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'singleFileUploads' => false,
            'limitMultiFileUploads' => 1,
			'limitConcurrentUploads' => 1,
		    //'multiple' => false,
			'maxFileSize' => 200000000,
			'formData' => json_encode([
				'filename' => 'abc',
				'description' => 'eee',
			]),
			'result' => json_encode(['files' => [
				'url' => 'abc',
				'name' => '111',
			]]),
			'files' => json_encode([
				'url' => 'abc',
				'name' => '111',
			]),
        ],
        'clientEvents' => [
            'fileuploaddone' => 'function(e, data) {
				var attachmentId = data.result.files[0].id;
                $("#goods-main_photo").val(attachmentId);				
                //console.log(data.result.files);
            }',
            'fileuploadfail' => 'function(e, data) {
            }',
            'fileuploadstart' => 'function(e, data) {
				alert("sss");
            }',
            'fileuploadalways' => 'function(e, data) {
				alert("sss");
            }',
            'fileuploadstop' => 'function(e, data) {
				$(".template-download:last-child").addClass("lastupload");
				$(".template-download").not(".lastupload").remove();
				$(".template-download:last-child").removeClass("lastupload");				
            }',				
        ],
    ]);
    ?>

    <?= $form->field($model, 'arrive_line')->textInput() ?>
    <?= $form->field($model, 'signup_base')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
