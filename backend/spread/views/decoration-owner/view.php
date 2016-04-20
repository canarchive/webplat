<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => Yii::$app->formatter->asImage($model->picture),
		],
        'name',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		[
            'attribute' => 'start_at',
            'value'=> date('Y-m-d H:i:s',$model->start_at),
        ],
		[
            'attribute' => 'end_at',
            'value'=> date('Y-m-d H:i:s',$model->end_at),
        ],
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

