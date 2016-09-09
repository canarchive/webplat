<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$attachmentModel = new Attachment();
$logo = $attachmentModel->getFieldInfos('merchant', 'logo');
$picture = $attachmentModel->getFieldInfos('merchant', 'picture');
$aptitude = $attachmentModel->getFieldInfos('merchant', 'aptitude');
$model->aptitude = $attachmentModel->getFieldIds('merchant', 'aptitude', $model->id); 

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'brief')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => Yii::t('admin-common', 'Select Sort')]); ?>
    <?= $form->field($model, 'company_id')->dropDownList($model->companyInfos, ['prompt' => Yii::t('admin-common', 'Select Company')]); ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo]',
        'url' => ['/merchant-upload/index', 'table' => 'merchant', 'field' => 'logo', 'id' => $model->id],
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
    <?= $form->field($model, 'num_owner')->textInput() ?>
    <?= $form->field($model, 'num_realcase')->textInput() ?>
    <?= $form->field($model, 'num_working')->textInput() ?>
    <?= $form->field($model, 'score')->textInput() ?>
    <?= $form->field($model, 'praise')->textInput() ?>
    <?= $form->field($model, 'hotline')->textInput() ?>
    <?= $form->field($model, 'postcode')->textInput() ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/merchant-upload/index', 'table' => 'merchant', 'field' => 'picture', 'id' => $model->id],
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
    <?= $form->field($model, 'aptitude')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[aptitude]',
        'url' => ['/merchant-upload/index', 'table' => 'merchant', 'field' => 'aptitude', 'id' => $model->id],
        'gallery' => true,
        'fieldOptions' => [
            'isSingle' => $aptitude['isSingle'],
            'idField' => Html::getInputId($model, 'aptitude'),
            'accept' => 'image/*'
        ],  
        'clientOptions' => [
            //'dataType' => 'json',
            //'noShow' => true,
            'maxFileSize' => $aptitude['maxSize'] * 1024,
        ],  
    ]); 
    ?> 
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
