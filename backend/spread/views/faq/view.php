<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'owner',
        'name',
		[
			'attribute' => 'company_id',
			'value' => $model->company_id > 0 && isset($model->companyInfos[$model->company_id]) ? $model->companyInfos[$model->company_id] : '',
		],
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

