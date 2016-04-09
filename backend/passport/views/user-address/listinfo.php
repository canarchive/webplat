<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'user_id',
		'name',
		'consignee',
		'region_code',
		'address',
		'zipcode',
		'is_default',
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
