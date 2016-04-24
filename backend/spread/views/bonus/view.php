<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'decoration_id',
			'value' => $model->decoration_id > 0 ? $model->decorationInfos[$model->decoration_id] : '',
		],		
        'name',
		'price',
		'limit_day',
        'orderlist',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		'description',			
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

