<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		[
            'attribute' => 'company_id',
            'value'=> function($model){
				if ($model->company_id < 1) {
					return '';
				}
                return $model->companyInfos[$model->company_id];
            },
        ],
		'signup_base',
		'signup_number',
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => function($model) {
				return $model->getAttachmentImg($model->picture);
			}
		],
		[
            'attribute' => 'start_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->start_at);
            },
        ],
		[
            'attribute' => 'end_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->end_at);
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
