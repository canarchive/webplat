<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'order_prefix',
		'order_start',
		'order_end',
		[
			'attribute' => 'groupon_id',
			'value' => !empty($model->grouponInfo) ? $model->grouponInfo['groupon_name'] : '',
		],
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
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

