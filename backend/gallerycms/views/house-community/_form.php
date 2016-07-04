<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use gallerycms\models\Attachment;

$attachmentModel = new Attachment();
$picture = $attachmentModel->getFieldInfos('position', 'picture');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'type')->textInput(['maxlength' => 128]) ?>
    <?= //$form->field($model, 'type')->dropDownList($model->typeInfos, ['prompt' => Yii::t('admin-common', 'Select Type')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'price_average')->textInput() ?>
    <?= $form->field($model, 'price_average')->textInput() ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/gallerycms-upload/index', 'table' => 'position', 'field' => 'picture', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $picture['isSingle'],
			'idField' => Html::getInputId($model, 'picture'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $picture['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'picture_mobile')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture_mobile]',
        'url' => ['/gallerycms-upload/index', 'table' => 'position', 'field' => 'picture_mobile', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $pictureMobile['isSingle'],
			'idField' => Html::getInputId($model, 'picture_mobile'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $pictureMobile['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'picture_ext')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture_ext]',
        'url' => ['/gallerycms-upload/index', 'table' => 'position', 'field' => 'picture_ext', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $pictureExt['isSingle'],
			'idField' => Html::getInputId($model, 'picture_ext'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $pictureExt['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
