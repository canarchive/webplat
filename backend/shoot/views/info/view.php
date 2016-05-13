<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'code',
		[
			'attribute' => 'sort',
			'value' => $model->sortInfos[$model->sort],
		],
        'orderlist',
		[
			'attribute' => 'template',
			'value' => $model->templateInfos[$model->template],
		],
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		'description',
		'content',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

