<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use website\models\Category;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use website\models\Attachment;

$categoryModel = new Category();
$attachmentModel = new Attachment();
$mainPhoto = $attachmentModel->getFieldInfos('goods', 'main_photo');
$picture = $attachmentModel->getFieldInfos('goods', 'picture');
//$brandInfos = $model->brandInfos();

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
	<?= $form->field($model, 'category_id')->dropDownList(
		$categoryModel->selectInfos, 
		[
			'prompt' => Yii::t('admin-common', 'Select Category'),
            'onchange'=>'$.post("' . Url::to(['category/listinfo']) . '?action=brandInfos&category_id=' . '"+$(this).val(),function(data){
                var htmlContent = "";
                $.each(data, function(i, v) {
                    htmlContent += "<option value=\"" + i + "\">" + v + "</option>";
                });

                $("#brand_id").html(htmlContent);
            });',
		]
	); ?>
	<?= $form->field($model, 'brand_id')->dropDownList(
		$model->brandInfos,
		[
			'prompt' => Yii::t('admin-common', 'Select Brand'),
			'id' => 'brand_id',
		]
	); ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'market_price')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'main_photo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[main_photo]',
        'url' => ['/website-upload/index', 'table' => 'goods', 'field' => 'main_photo', 'id' => $model->id],
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
        'url' => ['/website-upload/index', 'table' => 'goods', 'field' => 'picture', 'id' => $model->id],
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
    <?= $form->field($model, 'keyword')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'content')->textarea(['rows' => 3]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
