<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'user_id',
        'coupon',
		'money',
		[
			'attribute' => 'sort_id',
			'value' => function($model) {
				return $model->sort_id;
			},
		],
		[
            'attribute' => 'start_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->start_at);
            },
        ],
		[
            'attribute' => 'end_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->end_at);
            },
        ],
		[
            'attribute' => 'used_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->used_at);
            },
        ],
		[
			'attribute' => 'status',
			'value' => function($model) {
				return $model->status;
			},
	    ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
