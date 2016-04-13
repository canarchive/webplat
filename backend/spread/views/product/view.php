<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'number',
		'price',
		'market_price',
		'orderlist',
		[
			'format' => 'raw',
			'attribute' => 'main_photo',
			'value' => $model->getAttachmentImg($model->main_photo, false),
		],
		[
			'attribute' => 'category_id',
			'value' => $model->categoryInfos[$model->category_id],
		],		
		[
			'attribute' => 'brand_id',
			'value' => $model->brandInfos[$model->brand_id],
		],		
		[
			'attribute' => 'merchant_id',
			'value' => isset($model->merchantInfos[$model->merchant_id]) ? $model->merchantInfos[$model_id] : $model->merchant_id,
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

