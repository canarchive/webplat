<?php
$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'code',
		'parent_code',
		[
			'attribute' => 'module',
			'value' => $model->moduleInfos[$model->module],
		],
		'controller',
		'method',
		[
            'attribute' => 'display',
			'value' => $model->displayInfos[$model->display],
        ],
		'extparam',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

