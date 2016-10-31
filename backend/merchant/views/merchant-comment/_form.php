<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use merchant\models\Category;
use yii\helpers\Url;
use common\widgets\FileUploadUI;
use merchant\models\Attachment;

$ownerInfo = $this->context->ownerInfo;
$starElems = [
	0 => '',
	1 => '1星',
	2 => '2星',
	3 => '3星',
	4 => '4星',
	5 => '5星',
];

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	<input type="hidden" name="owner_id" value="<?= $ownerInfo['id']; ?>" />
    <?= $form->field($model, 'design_star')->dropDownList($starElems); ?>
    <?= $form->field($model, 'execution_star')->dropDownList($starElems); ?>
    <?= $form->field($model, 'service_star')->dropDownList($starElems); ?>

    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $form->field($model, 'content')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
