<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$picture = $attachmentModel->getFieldInfos('decoration', 'picture');
$pictureSmall = $attachmentModel->getFieldInfos('decoration', 'picture_small');
$map = $attachmentModel->getFieldInfos('decoration', 'map');
$model->start_at = date('Y-m-d H:i:s', $model->start_at);
$model->end_at = date('Y-m-d H:i:s', $model->end_at);

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'company_id')->dropDownList($model->companyInfos, ['prompt' => Yii::t('admin-common', 'Select Company')]); ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= $form->field($model, 'holding_at')->textInput() ?>
    <?= $form->field($model, 'start_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#decoration-start_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'end_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#decoration-end_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/spread-upload/index', 'table' => 'decoration', 'field' => 'picture', 'id' => $model->id],
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
    <?= $form->field($model, 'picture_small')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture_small]',
        'url' => ['/spread-upload/index', 'table' => 'decoration', 'field' => 'picture_small', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $pictureSmall['isSingle'],
			'idField' => Html::getInputId($model, 'picture_small'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $pictureSmall['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'map')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[map]',
        'url' => ['/spread-upload/index', 'table' => 'decoration', 'field' => 'map', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $map['isSingle'],
			'idField' => Html::getInputId($model, 'map'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
			'maxFileSize' => $map['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'arrive_line')->textInput() ?>
    <?= $form->field($model, 'signup_base')->textInput() ?>
    <?= $form->field($model, 'sms')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'sms_new')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
