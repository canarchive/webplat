<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$menuInfos = $this->context->menuInfos;
$this->title = $menuInfos['menuTitle'];
$templateMethods = '';
$options = [];
foreach ($menuInfos['appMenus'] as $appMenu) {
	if ($appMenu['display'] == 4) {
		$templateMethods .= "{{$appMenu['method']}} ";
	}
	if ($appMenu['extparam'] == 'modal') {
		$options[$appMenu['method']] = ['class' => 'btn-setting-my'];
	}
}
$templateMethods = trim($templateMethods);
if (!isset($noActionColumn) && !empty($templateMethods)) {

    $actionColumn = [
        'class' => 'backend\components\CustomActionColumn',
        'template' => $templateMethods,
		'buttonOptions' => $options,
    ];
    $gridViewParams['columns'][] = $actionColumn;
}

if (isset($searchContent)) {
	echo $searchContent;
}
?>
<div class="index">
    <?php
    Pjax::begin(['enablePushState'=>false]);
    echo GridView::widget($gridViewParams);
    Pjax::end();
    ?>
</div>
