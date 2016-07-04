<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'name',
		'spell',
		'orderlist',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

