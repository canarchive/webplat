<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$logo = $attachmentModel->getFieldInfos('brand', 'logo');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code')->textInput() ?>
    <?= $form->field($model, 'category_id')->dropDownList($model->categoryInfos, ['prompt' => Yii::t('admin-common', 'Select Category')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo]',
        'url' => ['/spread-upload/index', 'table' => 'brand', 'field' => 'logo', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $logo['isSingle'],
			'idField' => Html::getInputId($model, 'logo'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $logo['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
