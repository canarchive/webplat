<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use website\models\Attachment;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'statusInfos')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Brand IsShow')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= FileUploadUI::widget([
        'model' => new Attachment,
        'attribute' => 'file',
        'url' => ['/website-upload/index', 'table' => 'brand', 'field' => 'logo', 'id' => $model->id],
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
			'maxFileSize' => 2000000,
			'formData' => json_encode([
				'filename' => 'abc',
				'description' => 'eee',
			]),
        ],
        'clientEvents' => [
            'fileuploaddone' => 'function(e, data) {
            }',
            'fileuploadfail' => 'function(e, data) {
                console.log(e);
                console.log(data);
            }',
            'fileuploadstop' => 'function(e, data) {
				$(".template-download:last-child").addClass("lastupload");
				$(".template-download").not(".lastupload").remove();
				$(".template-download:last-child").removeClass("lastupload");				
            }',				
        ],
    ]);
    ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
