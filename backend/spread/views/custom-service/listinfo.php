<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'code',
        'name',
		[
            'attribute' => 'mananger_id',
			'value' => function($model) {
				$return  = isset($model->managerAllInfos[$model->manager_id]) ? $model->managerAllInfos[$model->manager_id] : '';
				return $return;
			}
		],
		'mobile',
		'serviced_num',
		'serviced_times',
		[
            'attribute' => 'distributed_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->distributed_at);
            },
        ],
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
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
