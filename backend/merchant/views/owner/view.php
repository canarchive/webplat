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
			'attribute' => 'merchant_id',
			'value' => $model->merchantInfos[$model->merchant_id],
		],
		[
			'attribute' => 'service_id',
			'value' => $model->serviceInfos[$model->service_id],
		],
		[
			'attribute' => 'house_type',
			'value' => $model->houseTypeInfos[$model->house_type],
		],
		[
			'attribute' => 'style',
			'value' => $model->styleInfos[$model->style],
		],
		'area',
		'community_name',
		[
			'attribute' => 'decoration_type',
			'value' => $model->decorationTypeInfos[$model->decoration_type],
		],
		'decoration_price',
		[
			'format' => 'raw',
			'attribute' => 'picture_design',
			'value' => $model->getAttachmentImg($model->picture_design, false),
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

