<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'name',
		[
			'format' => 'raw',
			'attribute' => 'url',
			'value' => Yii::$app->formatter->asUrl($model->url),
		],
		[
			'format' => 'raw',
			'attribute' => 'url_mobile',
			'value' => Yii::$app->formatter->asUrl($model->url_mobile),
		],
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

