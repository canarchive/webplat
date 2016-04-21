<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'name',
		'catdir',
        'parent_id',
        'orderlist',
		'template',
		'description',
		'meta_title',
		'meta_keyword',
		'meta_description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

