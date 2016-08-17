<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'parent_id',
        'orderlist',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
        'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

