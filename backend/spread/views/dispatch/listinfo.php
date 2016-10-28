<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'id',
        'mobile',
		[
            'format' => 'raw',
			'attribute' => 'merchant_id',
			'value' => function($model) {
				if ($model->merchant_id > 0) {
				    return $model->merchantInfo['nameUrl'];
				}
				return '';
			},
        ],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'view_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->view_at);
            },
        ],
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
