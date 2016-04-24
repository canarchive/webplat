<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'name',
		[
			'attribute' => 'sort',
			'value' => $model->sortInfos[$model->sort],
		],		
		'price',
		'limit_mobile',
		'orderlist',
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => $model->getAttachmentImg($model->thumb, false),
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

