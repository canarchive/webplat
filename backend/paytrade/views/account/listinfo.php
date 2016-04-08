<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'orderid',
        'orderid_info',
        'orderid_plat',
		'user_id',
		'money',
		'money_valid',
		[
            'attribute' => 'account_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->account_at);
            },
        ],
		[
            'attribute' => 'account_at_valid',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->account_at_valid);
            },
        ],
        'status',
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
