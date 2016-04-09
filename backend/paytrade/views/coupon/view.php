<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'coupon',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

