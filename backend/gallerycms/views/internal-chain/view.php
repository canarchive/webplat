<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'name',
		'spell',
		[
			'format' => 'raw',
			'attribute' => 'url',
			'value' => "<a href='{$model->url}' target='_blank'>{$model->url}</a>",
		],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

