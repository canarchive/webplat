<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'code',
        'name',
		[
			'attribute' => 'status',
			'value' => isset($model->managerAllInfos[$model->manager_id]) ? $model->managerAllInfos[$model->manager_id] : '',
		],
		'mobile',
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

