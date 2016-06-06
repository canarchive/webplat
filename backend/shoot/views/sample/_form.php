<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use shoot\models\AttachmentSample;

$attachmentModel = new AttachmentSample();
$picture = $attachmentModel->getFieldInfos('sample', 'picture');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'photographer_id')->dropDownList($model->photographerInfos, ['prompt' => Yii::t('admin-common', 'Select photographer')]); ?>
    <?= $form->field($model, 'goods_id')->dropDownList($model->goodsInfos, ['prompt' => Yii::t('admin-common', 'Select Goods')]); ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/shoot-upload/index', 'table' => 'sample', 'field' => 'picture', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $picture['isSingle'],
			'idField' => Html::getInputId($model, 'picture'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'noShow' => true,
			'maxFileSize' => $picture['maxSize'] * 1024,
        ],
    ]);
    ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
