<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use merchant\models\Category;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('working', 'thumb');

$pictureLiving = $attachmentModel->getFieldInfos('working', 'picture_living');
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'brief')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/merchant-upload/index', 'table' => 'working', 'field' => 'thumb', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $thumb['isSingle'],
			'idField' => Html::getInputId($model, 'thumb'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $thumb['maxSize'] * 1024,
        ],
    ]);
    ?>

    <?php foreach (['start', 'electric', 'cement', 'paint', 'finish'] as $step) { $stepField = "picture_{$step}"; $pictureInfo = $attachmentModel->getFieldInfos('working', $stepField); ?>
    <?= $form->field($model, $step . '_at')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, $step . '_desc')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, $stepField)->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => "files[{$stepField}]",
        'url' => ['/merchant-upload/index', 'table' => 'working', 'field' => $stepField, 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $pictureInfo['isSingle'],
			'idField' => Html::getInputId($model, $stepField),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $pictureInfo['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?php } ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
