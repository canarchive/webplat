<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$menuInfos = $this->context->menuInfos;
$this->title = $menuInfos['menuTitle'];
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

	<form id="myform" name="myform" accept-charset="utf-8" method="post" action="<?php if (in_array('update', array_keys($menuInfos['appMenus']))) { echo $menuInfos['appMenus']['update']['url'] . '?action=listorder'; } ?>">
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable" id="dnd-example">
            <?= $treeContent; ?>
        </table>
    </div>
    </form>
</div>
</div>
</div>
