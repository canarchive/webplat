<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
		'spell',
		[
			'format' => 'raw',
			'attribute' => 'url',
			'value' => function($model) {
				return "<a href='{$model->url}' target='_blank'>{$model->url}</a>";
			},
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
