<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		[
            'attribute' => 'type',
			'value' => function($model) {
				return $model->typeInfos[$model->type];
			}
		],
		[
            'attribute' => 'city',
			'value' => function($model) {
				return $model->cityInfos[$model->city];
			}
		],
		[
            'attribute' => 'merchant_id',
            'value'=> function($model){
				if ($model->merchant_id < 1) {
					return '';
				}
                return $model->merchantInfos[$model->merchant_id];
            },
        ],
		'signup_base',
		'signup_number',
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => function($model) {
				return $model->getAttachmentImg($model->picture);
			}
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
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
