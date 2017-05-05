<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'house_type',
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
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => $model->getAttachmentImg($model->thumb, false),
		],
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

