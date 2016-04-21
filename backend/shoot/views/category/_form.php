<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\FileUploadUI;
use gallerycms\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos($tableName, 'thumb');

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'parent_id')->dropDownList($model->selectInfos, ['prompt' => Yii::t('admin-common', 'Select Parent')]); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
