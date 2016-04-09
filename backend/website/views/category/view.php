<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'name',
        'parent_id',
        'orderlist',
		'is_show',
        'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

