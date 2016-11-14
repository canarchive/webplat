<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$mainPhoto = $attachmentModel->getFieldInfos('product', 'main_photo');

$regionInfo = $model->getRegionInfo($model->region_code);
$model->region_level1 = isset($regionInfo['parent_code']) ? $regionInfo['parent_code'] : '';
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?php if ($model->scenario == 'create') { ?>
	<?php } ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'parent_code')->dropDownList($model->selectInfos, ['prompt' => Yii::t('admin-common', 'Select Menu Parent')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'start_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#groupon-start_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>

    <?= $form->field($model, 'main_photo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[main_photo]',
        'url' => ['/spread-upload/index', 'table' => 'product', 'field' => 'main_photo', 'id' => $model->id],
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

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
