<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'signup_base',
		'signup_number',
		'address',
		[
			'attribute' => 'type',
			'value' => $model->typeInfos[$model->type],
		],
		[
			'attribute' => 'city',
			'value' => $model->cityInfos[$model->city],
		],
		[
			'attribute' => 'merchant_id',
			'value' => $model->merchant_id > 0 ? $model->merchantInfos[$model->merchant_id] : '',
		],
		[
            'attribute' => 'start_at',
            'value'=> date('Y-m-d H:i:s',$model->start_at),
        ],
		[
            'attribute' => 'end_at',
            'value'=> date('Y-m-d H:i:s',$model->end_at),
        ],
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => $model->getAttachmentImg($model->picture, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'picture_small',
			'value' => $model->getAttachmentImg($model->picture_small, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'map',
			'value' => $model->getAttachmentImg($model->map, false),
		],
		'arrive_line',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		'sms',
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

