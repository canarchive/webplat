<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use merchant\models\Category;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('realcase', 'thumb');
$pictureDesign = $attachmentModel->getFieldInfos('realcase', 'picture_design');
$designSketch = $attachmentModel->getFieldInfos('realcase', 'design_sketch');
$model->design_sketch = $attachmentModel->getFieldIds('realcase', 'design_sketch', $model->id); 

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->merchantInfos, ['prompt' => Yii::t('admin-common', 'Select Merchant')]); ?>
    <?= $form->field($model, 'service_id')->dropDownList($model->serviceInfos, ['prompt' => Yii::t('admin-common', 'Select service')]); ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'community_name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'house_type')->dropDownList($model->houseTypeInfos, ['prompt' => Yii::t('admin-common', 'Select House Type')]); ?>
    <?= $form->field($model, 'style')->dropDownList($model->styleInfos, ['prompt' => Yii::t('admin-common', 'Select Style')]); ?>
    <?= $form->field($model, 'area')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'decoration_type')->dropDownList($model->decorationTypeInfos, ['prompt' => Yii::t('admin-common', 'Select Decoration Type')]); ?>
    <?= $form->field($model, 'decoration_price')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/merchant-upload/index', 'table' => 'realcase', 'field' => 'thumb', 'id' => $model->id],
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
    <?= $form->field($model, 'picture_design')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture_design]',
        'url' => ['/merchant-upload/index', 'table' => 'realcase', 'field' => 'picture_design', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $pictureDesign['isSingle'],
			'idField' => Html::getInputId($model, 'picture_design'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $pictureDesign['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'design_sketch')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[design_sketch]',
        'url' => ['/merchant-upload/index', 'table' => 'realcase', 'field' => 'design_sketch', 'id' => $model->id],
        'gallery' => true,
        'fieldOptions' => [
            'isSingle' => $designSketch['isSingle'],
            'idField' => Html::getInputId($model, 'design_sketch'),
            'accept' => 'image/*'
        ],  
        'clientOptions' => [
            //'dataType' => 'json',
            //'noShow' => true,
            'maxFileSize' => $designSketch['maxSize'] * 1024,
        ],  
    ]); 
    ?> 
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
