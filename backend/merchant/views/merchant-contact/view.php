<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'merchant_id',
			'value' => $model->MerchantInfos[$model->merchant_id],
		],
        'name',
		'mobile',
		'wechat',
		'orderlist',
		[
			'attribute' => 'type',
			'value' => empty($model->type) ? '' : $model->typeInfos[$model->type],
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
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

