<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'user_id',
        'money',
		'unusual_money',
		'want_money',
		'want_times',
		'valid_money',
		'valid_times',
		[
            'attribute' => 'account_lasttime',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->account_lasttime);
            },
        ],
		'pay_times',
		'pay_money',
		[
            'attribute' => 'pay_lasttime',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->pay_lasttime);
            },
        ],
		'activity_times',
		'activity_money',
		[
            'attribute' => 'activity_lasttime',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->activity_lasttime);
            },
        ],
		'coupon_times',
		'coupon_money',
		[
            'attribute' => 'coupon_lasttime',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->coupon_lasttime);
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
