<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		'mac',
		'username',
		[
			'attribute' => 'company_id',
			'value' => function($model) {
				if ($model->company_id > 0) {
					return $model->companyInfos[$model->company_id];
				}
				return '';
			},
		],
		[
            'attribute' => 'groupon_id',
            'value'=> function($model){
				$info = $model->grouponInfo;
				return isset($info['groupon_name']) ? $info['groupon_name'] : '';
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
			},
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
