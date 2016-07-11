<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use merchant\models\Category;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$attachmentModel = new Attachment();
$pictureLiving = $attachmentModel->getFieldInfos('working_status', 'picture_living');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'working_id')->dropDownList($model->workingInfos, ['prompt' => Yii::t('admin-common', 'Select Working')]); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'picture_living')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture_living]',
        'url' => ['/merchant-upload/index', 'table' => 'working_status', 'field' => 'picture_living', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $pictureLiving['isSingle'],
			'idField' => Html::getInputId($model, 'picture_living'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $pictureLiving['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
