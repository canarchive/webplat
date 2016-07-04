<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\FileUploadUI;
use gallerycms\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos($tableName, 'thumb');

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'catdir'); ?>
    <?= $form->field($model, 'parent_id')->dropDownList($model->selectInfos, ['prompt' => Yii::t('admin-common', 'Select Parent')]); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'template')->dropDownList($model->templateInfos); ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/gallerycms-upload/index', 'table' => $tableName, 'field' => 'thumb', 'id' => $model->id],
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
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'meta_title'); ?>
    <?= $form->field($model, 'meta_keyword'); ?>
    <?= $form->field($model, 'meta_description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
