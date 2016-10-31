<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'format' => 'raw',
			'attribute' => 'merchant_id',
			'value' => $model->merchantInfo['nameUrl'],
		],
		[
			'attribute' => 'owner_id',
			'value' => $model->ownerInfo['name'] . '-' . $model->ownerInfo['community_name'],
		],
		'design_star',
		'execution_star',
		'service_star',
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
		'content',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

