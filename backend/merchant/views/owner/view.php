<?php
$this->context->companyInfo = $model->companyInfo;

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
			'value' => '',//$model->merchantInfos[$model->merchant_id],
		],
		[
			'attribute' => 'service_id',
			'value' => isset($model->serviceInfos[$model->service_id]) ? $model->serviceInfos[$model->service_id] : '',
		],
		[
			'attribute' => 'house_type',
			'value' => isset($model->houseTypeInfos[$model->house_type]) ? $model->houseTypeInfos[$model->house_type] : $model->house_type,
		],
		[
			'attribute' => 'style',
			'value' => isset($model->styleInfos[$model->style]) ? $model->styleInfos[$model->style] : $model->style,
		],
		'area',
		'community_name',
		[
			'attribute' => 'decoration_type',
			'value' => isset($model->decorationTypeInfos[$model->decoration_type]) ? $mode->decorationTypeInfos[$model->decoration_type] : $model->decoration_price,
		],
		'decoration_price',
		[
			'attribute' => 'status',
			'value' => isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : $mnodel->status,
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

