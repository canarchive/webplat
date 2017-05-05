<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'mobile',
		[
            'attribute' => 'decoration_id',
            'value'=> function($model){
				$info = $model->decorationInfo;
				return isset($info['name']) ? $info['name'] : '';
            },
        ],
		'lottery_id',
		'name',
		'prize',
		'price',
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'confirm_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->confirm_at);
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

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
