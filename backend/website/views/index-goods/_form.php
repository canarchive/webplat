<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use website\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('index_goods', 'thumb');
$picture = $attachmentModel->getFieldInfos('index_goods', 'picture');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'category_id')->dropDownList($model->indexSortInfos, ['prompt' => Yii::t('admin-common', 'Select Category')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'market_price')->textInput() ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/website-upload/index', 'table' => 'index_goods', 'field' => 'thumb', 'id' => $model->id],
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
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/website-upload/index', 'table' => 'index_goods', 'field' => 'picture', 'id' => $model->id],
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
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
