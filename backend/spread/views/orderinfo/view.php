<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'orderid',
		'mobile',
		'money',
		'business_id',
		'business_name',
		[
			'attribute' => 'pos_machine_id',
			'value' => $model->pos_machine_id > 0 ? $model->posMachineInfos[$model->pos_machine_id] : '',
		],
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

