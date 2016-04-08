<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'orderid',
        'user_id',
        'money',
		'money_valid',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

