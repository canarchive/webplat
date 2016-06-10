<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use common\ueditor\UEditor;
use shoot\models\Attachment;

$attachmentModel = new Attachment();
$mainPhoto = $attachmentModel->getFieldInfos('goods', 'main_photo');
$picture = $attachmentModel->getFieldInfos('goods', 'picture');
$model->picture = $attachmentModel->getFieldIds('goods', 'picture', $model->id);

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'brief')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'category_id')->dropDownList($model->categoryLevelInfos, ['prompt' => Yii::t('admin-common', 'Select Category')]); ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'price_market')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'main_photo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[main_photo]',
        'url' => ['/shoot-upload/index', 'table' => 'goods', 'field' => 'main_photo', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $mainPhoto['isSingle'],
			'idField' => Html::getInputId($model, 'main_photo'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $mainPhoto['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/shoot-upload/index', 'table' => 'goods', 'field' => 'picture', 'id' => $model->id],
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
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'keyword')->textInput() ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
	<?= $form->field($model, 'content')->widget(Ueditor::className(),[]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
