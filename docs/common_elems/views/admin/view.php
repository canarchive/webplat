<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'username',
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => Yii::$app->formatter->asImage($model->logo),
		],
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

