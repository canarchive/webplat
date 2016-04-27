<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'photographer_id',
			'value' => $model->photographer_id > 0 ? $model->photographerInfos[$model->photographer_id] : '',
		],		
		[
			'attribute' => 'category_id',
			'value' => $model->category_id > 0 ? $model->categoryInfos[$model->category_id] : '',
		],		
		'orderlist',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

