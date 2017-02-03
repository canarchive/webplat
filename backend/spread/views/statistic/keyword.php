<?php

$extKey = [];//is_null($searchModel->status) || $searchModel->status === ''? 99 : $searchModel->status;
$columns = [];//array_merge($columnsBase, $columnsExts[$extKey]);
$cityColumn = $searchModel->city_code_type ? ['city_code'] : [];
$fromTypeColumn = $searchModel->from_type_type ? ['from_type'] : [];
//var_dump($searchModel->datetimeColumns);exit();
$columns = array_merge($cityColumn, $searchModel->keywordColumns, $searchModel->channelColumns, $serviceColumn, $fromTypeColumn, $searchModel->datetimeColumns, ['visit_num', 'visit_num_success']);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
	'columns' => $columns,
];
$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
