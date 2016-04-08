<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'username',
        'truename',
        'email',
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => Yii::$app->formatter->asImage($model->logo),
		],
		[
			'attribute' => 'is_show',
			'value' => $model->isShowInfos[$model->is_show],
		],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

