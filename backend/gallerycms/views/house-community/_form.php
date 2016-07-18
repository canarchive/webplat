<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use gallerycms\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('house_community', 'thumb');
$picture = $attachmentModel->getFieldInfos('house_community', 'picture');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>

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

                $("select#housecommunity-region_code").html(htmlContent);
            });',
    ]) ?>
    <?= $form->field($model, 'region_code')->dropDownList($model->getRegionSubInfos($model->region_level1),
    [
        'prompt'=>'--请选择市--',
    ]) ?>

    <?= $form->field($model, 'house_type')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'price_average')->textInput() ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/gallerycms-upload/index', 'table' => 'position', 'field' => 'picture', 'id' => $model->id],
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
    <?= $form->field($model, 'build_time')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#housecommunity-build_time').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD'});
        });
    </script>
    <?= $form->field($model, 'property_fee')->textInput() ?>
    <?= $form->field($model, 'property_company')->textInput() ?>
    <?= $form->field($model, 'developer')->textInput() ?>
    <?= $form->field($model, 'plot_ratio')->textInput() ?>
    <?= $form->field($model, 'greening_rate')->textInput() ?>
    <?= $form->field($model, 'building_num')->textInput() ?>
    <?= $form->field($model, 'house_num')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
