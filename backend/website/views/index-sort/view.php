<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'code',
        'name',
		'orderlist',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

