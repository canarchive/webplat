<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use paytrade\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('activity', 'thumb');

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'money')->textInput() ?>
    <?= $form->field($model, 'discount')->textInput() ?>
    <?= $form->field($model, 'money_bottom')->textInput() ?>
    <?= $form->field($model, 'money_top')->textInput() ?>
    <?= $form->field($model, 'goods_number')->textInput() ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/paytrade-upload/index', 'table' => 'activity', 'field' => 'thumb', 'id' => $model->id],
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
    <?= $form->field($model, 'start_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#activity-start_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'end_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#activity-end_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
	<?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
