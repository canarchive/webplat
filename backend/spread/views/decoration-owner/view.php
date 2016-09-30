<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'user_id',
        'name',
		'mobile',
		'from_type',
		'signup_ip',
		'signup_city',
		'signup_channel',
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
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

