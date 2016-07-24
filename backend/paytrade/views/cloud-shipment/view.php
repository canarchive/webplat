<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

