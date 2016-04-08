<?php
use yii\helpers\Html;

?>
<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('admin-common', 'Create') : Yii::t('admin-common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
