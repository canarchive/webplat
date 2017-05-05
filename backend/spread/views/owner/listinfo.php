<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		'user_id',
		'mobile',
		[
			'attribute' => 'sort',
			'value' => function($model) {
				if (empty($model->sort)) {
					return '';
				}
				return $model->sortInfos[$model->sort];
			},
		],
		'gender',
		'birthday',
		'telphone',
		'email',
		'qq',
		'service_id',
		'callback_overtime',
		'callback_again',
		'signup_num',
		'signin_num',
		'order_num',
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
