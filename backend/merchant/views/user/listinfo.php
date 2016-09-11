<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		'id',
        'truename',
        'mobile',
		[
            'attribute' => 'merchant',
			'value' => function($model) {
				$return = isset($model->merchantInfos[$model->merchant_id]) ? $model->merchantInfos[$model->merchant_id] : '';
				return $return;
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'email',
			'value' => function($model) {
				return Yii::$app->formatter->asEmail($model->email);
			}
        ],
        'login_num',
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
		[
            'attribute' => 'last_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->last_at);
            },
        ],
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			},
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
