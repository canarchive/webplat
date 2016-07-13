<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => $model->getAttachmentImg($model->thumb, false),
		],
        'name',
		'orderlist',
		[
			'attribute' => 'house_type',
			'value' => $model->houseTypeInfos[$model->house_type],
		],
		[
			'attribute' => 'style',
			'value' => $model->styleInfos[$model->style],
		],
		'area',
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

