<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
            'attribute' => 'merchant_id',
			'value' => function($model) {
				return $model->merchantInfos[$model->merchant_id];
			},
		],
        'name',
		'bank_account',
		[
            'attribute' => 'bank_name',
			'value' => function($model) {
				return $model->bankNameInfos[$model->bank_name];
			}
		],
		'bank_opening',
		[
            'attribute' => 'type',
			'value' => function($model) {
				return isset($model->typeInfos[$model->type]) ? $model->typeInfos[$model->type] : '';
			}
		],
		'orderlist',
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
			}
		],
		'description',
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
