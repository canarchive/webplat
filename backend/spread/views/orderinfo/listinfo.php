<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'id',
        'orderid',
		'business_sort_big',
		'business_sort',
		'business_name',
		'mobile',
		'money',
		/*[
			'attribute' => 'pos_machine_id',
			'value' => function($model) {
				if ($model->pos_machine_id > 0) {
					return $model->posMachineInfos[$model->pos_machine_id];
				}
				return '';
			},
		],*/
		[
            'attribute' => 'groupon_id',
            'value'=> function($model){
				return $model->grouponInfos[$model->groupon_id];
            },
		],
		'created_day',
		/*[
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
		],*/
		/*[
			'attribute' => 'status',
			'value' => function($model) {
			    return $model->statusInfos[$model->status];
			},
		],*/
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
