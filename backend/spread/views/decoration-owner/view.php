<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
<<<<<<< HEAD
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
=======
		'user_id',
        'name',
		'mobile',
		'from_type',
		'signup_ip',
		'signup_city',
		'channel',
		'keyword',
		[
            'attribute' => 'signup_at',
            'value'=> date('Y-m-d H:i:s',$model->signup_at),
        ],
		[
            'attribute' => 'callback_at',
            'value'=> date('Y-m-d H:i:s', $model->callback_at),
        ],
		[
            'attribute' => 'signin_at',
            'value'=> date('Y-m-d H:i:s',$model->signin_at),
        ],
		[
			'attribute' => 'invalid_status',
			'value' => $model->invalidStatusInfos[$model->invalid_status],
		],
		[
			'attribute' => 'callback_again',
			'value' => $model->callbackAgainInfos[$model->callback_again],
		],
		'note',
		'message',
>>>>>>> web-house
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

