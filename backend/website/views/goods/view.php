<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
    	'id',
        'name',
		[
			'attribute' => 'category_id',
			'value' => $model->categoryInfos[$model->category_id],
		],
		[
			'attribute' => 'brand_id',
			'value' => $model->brandInfos[$model->brand_id],
		],
		[
			'format' => 'raw',
			'attribute' => 'main_photo',
			'value' => $model->getAttachmentImg($model->main_photo, false),
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
		'keyword',
		'description',
		'content',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

