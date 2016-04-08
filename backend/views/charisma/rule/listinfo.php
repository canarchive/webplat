<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
		'name',
		'className',
		[
            'attribute' => 'createdAt',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->createdAt);
            },
        ],
		[
            'attribute' => 'updatedAt',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updatedAt);
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
