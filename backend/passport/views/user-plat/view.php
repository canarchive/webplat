<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'plat_code',
		'nickname',
		'openid',
		'status',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

