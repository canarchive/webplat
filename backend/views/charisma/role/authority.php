<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$controller = $this->context;
$menuInfos = $controller->menuInfos;

$treeContent = $this->render('_menuinfo', ['menuModel' => $menuModel, 'infos' => $infos, 'permissionKeys' => $permissionKeys]);
$this->params['haveTreeList'] = true;
?>
<script type="text/javascript">
$(document).ready(function() {
  $("#dnd-example").treeTable({
    indent: 30
  });
});
</script>

<div class="row">
<div class="box col-md-12">
<div class="box-inner">
    <div class="box-header well" data-original-title="">
	    <h2><i class="glyphicon glyphicon-user"></i><?= $this->title; ?> </h2>
        <div class="box-icon"> </div>
    </div>

    <?php $form = ActiveForm::begin(); ?>
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable" id="dnd-example">
            <?= $treeContent; ?>
        </table>
    </div>
	<?php if ($controller->actionIdBase == 'authority') { ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('admin-common', 'Update'), ['class' => 'btn btn-primary']) ?>
    </div>
    <?php } ?>
    <?php ActiveForm::end(); ?>
</div>
</div>
</div>

