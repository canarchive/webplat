<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		'order_prefix',
		'order_start',
		'order_end',
		[
            'attribute' => 'groupon_id',
            'value'=> function($model){
				$info = $model->grouponInfo;
				return isset($info['groupon_name']) ? $info['groupon_name'] : '';
            },
        ],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
		[
			'attribute' => 'status',
			'value' => function($model) {
			    return $model->statusInfos[$model->status];
			},
		],
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
