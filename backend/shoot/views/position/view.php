<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'name_ext',
		[
			'attribute' => 'type',
			'value' => $model->typeInfos[$model->type],
		],
		[
			'format' => 'raw',
			'attribute' => 'url',
			'value' => "<a href='{$model->url}' target='_blank'>{$model->url}</a>",
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
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => $model->getAttachmentImg($model->picture, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'picture_mobile',
			'value' => $model->getAttachmentImg($model->picture_mobile, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'picture_ext',
			'value' => $model->getAttachmentImg($model->picture_ext, false),
		],
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

