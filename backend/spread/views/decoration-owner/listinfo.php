<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		/*[
			'attribute' => 'decoration_id',
			'value' => function($model) {
				return $model->decoration_id;
			},
			],*/
		'city_code',
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
			'attribute' => 'invalid_status',
			'value' => function($model) {
				$value = isset($model->invalidStatusInfos[$model->invalid_status]) ? $model->invalidStatusInfos[$model->invalid_status] : $model->invalid_status;
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
