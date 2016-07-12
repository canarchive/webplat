<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'name',
		'spell',
		'orderlist',
		'meta_title',
		'meta_keyword',
		'meta_description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

