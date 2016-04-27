<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
		[
			'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			},
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
