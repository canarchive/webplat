<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$attachmentModel = new Attachment();
$logo = $attachmentModel->getFieldInfos('company', 'logo');
$regionInfo = $model->getRegionInfo($model->region_code);
$model->region_level1 = isset($regionInfo['parent_code']) ? $regionInfo['parent_code'] : '';

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'name_full')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'region_level1')->dropDownList($model->regionSubInfos,
    [
        'prompt'=>'--请选择省--',
        'onchange'=>'
            //$(".form-group.field-member-area").hide();
            $.post("' . Url::to(['/region/listinfo']) . '?action=subInfos&parent_code="+$(this).val(),function(data){
				console.log(data);
				var htmlContent = "";
				$.each(data, function(i, v) {
					htmlContent += "<option value=\"" + i + "\">" + v + "</option>";
				});

                $("select#company-region_code").html(htmlContent);
            });',
    ]) ?>
    <?= $form->field($model, 'region_code')->dropDownList($model->getRegionSubInfos($model->region_level1),
    [
        'prompt'=>'--请选择市--',
    ]) ?>

    <?= $form->field($model, 'hotline')->textInput() ?>
    <?= $form->field($model, 'postcode')->textInput() ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo]',
        'url' => ['/merchant-upload/index', 'table' => 'company', 'field' => 'logo', 'id' => $model->id],
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
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
