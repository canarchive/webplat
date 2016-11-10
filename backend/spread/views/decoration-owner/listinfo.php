<?php
$columnsBase = [
    'id',
    /*[
        'attribute' => 'decoration_id',
        'value' => function($model) {
            return $model->decoration_id;
        },
        ],*/
    'city_code',
    'name',
    'mobile',
    'channel',
    [
        'attribute' => 'signup_at',
        'value'=> function($model){
            return  date('Y-m-d H:i:s',$model->signup_at);
        },
    ],
    'signup_city',
    /*[
        'attribute' => 'callback_again',
        'value' => function($model) {
            return  date('Y-m-d H:i:s',$model->callback_again);
        }
    ],*/
];
$columnsExts = [
	0 => [
        //'message',
        'keyword',
		'keyword_search',
        'note',
    ],
	1 => [
	],
	2 => [
	],
	3 => [
	],
	4 => [
        [
            'attribute' => 'invalid_status',
            'value' => function($model) {
                $value = isset($model->invalidStatusInfos[$model->invalid_status]) ? $model->invalidStatusInfos[$model->invalid_status] : $model->invalid_status;
                return $value;
            },
        ],
	],
	99 => [
    [
        'attribute' => 'status',
        'value' => function($model) {
            $value = isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : $model->status;
            return $value;
        }
    ]
	]
];
$extKey = is_null($searchModel->status) || $searchModel->status === ''? 99 : $searchModel->status;
$columns = array_merge($columnsBase, $columnsExts[$extKey]);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
	'columns' => $columns,
];
$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
