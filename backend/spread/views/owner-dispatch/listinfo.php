<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'mobile',
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
            'attribute' => 'sendmsg_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->sendmsg_at);
            },
        ],
		[
            'attribute' => 'status',
			'value' => function($model) {
				return isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : '';
			}
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
