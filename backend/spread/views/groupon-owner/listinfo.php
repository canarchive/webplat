<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'attribute' => 'groupon_id',
			'value' => function($model) {
				return $model->groupon_id;
			},
		],
        'name',
		'mobile',
		'keyword',
		'signup_channel',
		[
            'attribute' => 'signup_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->signup_at);
            },
        ],
		'signup_city',
		'message',
		'note',
		[
			'attribute' => 'valid_status',
			'value' => function($model) {
				$value = isset($model->validStatusInfos[$model->valid_status]) ? $model->validStatusInfos[$model->valid_status] : $model->valid_status;
				return $value;
			},
		],
		[
            'attribute' => 'callback_again',
			'value' => function($model) {
				return $model->callbackAgainInfos[$model->callback_again];
			}
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
