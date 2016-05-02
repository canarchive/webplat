<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'signup_number',
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
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		'sms',
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

