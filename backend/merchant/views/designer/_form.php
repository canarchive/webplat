<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$attachmentModel = new Attachment();
$photo = $attachmentModel->getFieldInfos('designer', 'photo');
$merchantInfo = Yii::$app->params['merchantInfo'];

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	<input type="hidden" name="merchant_id" value="<?= $merchantInfo['id']; ?>" />
	<input type="hidden" name="city_code" value="<?= Yii::$app->params['companyInfo']['code_short']; ?>" />
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'aptitude')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'record')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'design_concept')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'score_praise')->textInput() ?>
    <?= $form->field($model, 'score_active')->textInput() ?>
    <?= $form->field($model, 'sample_num')->textInput() ?>
    <?= $form->field($model, 'photo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[photo]',
        'url' => ['/merchant-upload/index', 'table' => 'designer', 'field' => 'photo', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $photo['isSingle'],
			'idField' => Html::getInputId($model, 'photo'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $photo['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
