<?php
use yii\helpers\Url;

$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<ul class="navser">
	<li class="navser1">
		<a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang']); ?>" <?php if ($currentNav == 'yanfang') { echo 'class="add01"'; } ?>>免费验房</a>
    </li>
	<li class="navser2">
		<a href="<?= Url::to(['/house/feature/index', 'view' => 'sheji']); ?>" <?php if ($currentNav == 'sheji') { echo 'class="add02"'; } ?>>免费量房设计报价</a>
    </li>
	<li class="navser3">
		<a href="<?= Url::to(['/house/feature/index', 'view' => 'jianli']); ?>" <?php if ($currentNav == 'jianli') { echo 'class="add03"'; } ?>>免费监理</a>
    </li>
</ul>
