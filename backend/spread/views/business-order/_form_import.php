<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$import = $attachmentModel->getFieldInfos('business_order', 'import');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'groupon_id')->dropDownList($model->grouponInfos, ['prompt' => Yii::t('admin-common', 'Select Groupon')]); ?>
    <?= $form->field($model, 'import')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[import]',
        'url' => ['/spread-upload/index', 'table' => 'business_order', 'field' => 'import', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $import['isSingle'],
			'idField' => Html::getInputId($model, 'import'),
            'accept' => '*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $import['maxSize'] * 1024,
        ],
    ]);
    ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
