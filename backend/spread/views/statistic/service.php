<?php

$extKey = [];//is_null($searchModel->status) || $searchModel->status === ''? 99 : $searchModel->status;
$columns = [];//array_merge($columnsBase, $columnsExts[$extKey]);
$cityColumn = $searchModel->city_code_type ? ['city_code'] : [];
$serviceColumn = $searchModel->service_id_type ? ['service_id'] : [];
$fromTypeColumn = $searchModel->from_type_type ? ['from_type'] : [];
//var_dump($searchModel->datetimeColumns);exit();
$columns = array_merge($cityColumn, $searchModel->channelColumns, $serviceColumn, $fromTypeColumn, $searchModel->datetimeColumns, $searchModel->reportBaseColumns);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
	'columns' => $columns,
];
$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
