<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
        'logo',
        'category_id',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

