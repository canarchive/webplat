<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\ueditor\Ueditor;
use common\widgets\FileUploadUI;
use gallerycms\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('article', 'thumb');

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'category_id')->dropDownList($model->categoryLevelInfos, ['prompt' => Yii::t('admin-common', 'Select Category')]); ?>

    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/gallerycms-upload/index', 'table' => 'article', 'field' => 'thumb', 'id' => $model->id],
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

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'editor')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
	<?= $form->field($model, 'content')->widget(Ueditor::className(),[]) ?>
		
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
