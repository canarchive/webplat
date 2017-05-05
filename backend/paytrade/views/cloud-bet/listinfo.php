<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'orderid',
        [
            'attribute' => 'snapup_id',
            'value'=> function($model){
				return $model->snapup_id;
                //return $model->grouponInfos[$model->groupon_id];
            },
        ],
        [
            'attribute' => 'user_id',
            'value'=> function($model){
				return $model->snapup_id;
                //return $model->grouponInfos[$model->groupon_id];
            },
        ],
		'sn',
		'ip',
		'city',
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        'created_at_ext',
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
