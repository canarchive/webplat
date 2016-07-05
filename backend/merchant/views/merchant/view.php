<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => $model->getAttachmentImg($model->logo, false),
		],
        'name',
		[
			'attribute' => 'company_id',
			'value' => $model->companyInfos[$model->company_id],
		],
		[
			'attribute' => 'sort',
			'value' => $model->sortInfos[$model->sort],
		],
		[
			'attribute' => 'category_id',
			'value' => $model->categoryInfos[$model->category_id],
		],
        'hotline',
		'postcode',
		'address',
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

