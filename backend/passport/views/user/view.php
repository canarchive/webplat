<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'mobile',
        'username',
		'status',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

