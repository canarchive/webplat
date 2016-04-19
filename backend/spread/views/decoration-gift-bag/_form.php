<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$thumb = $attachmentModel->getFieldInfos('gift_bag', 'thumb');

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'decoration_id')->dropDownList($model->decorationInfos, ['prompt' => Yii::t('admin-common', 'Select Decoration')]); ?>
    <?= $form->field($model, 'gift_bag_id')->dropDownList($model->giftBagInfos, ['prompt' => Yii::t('admin-common', 'Select gift bag')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
		
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
