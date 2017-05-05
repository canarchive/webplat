<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				return $model->getAttachmentImg($model->thumb);
			}
		],
		[
            'attribute' => 'house_type',
			'value' => function($model) {
				return $model->houseTypeInfos[$model->house_type];
			},
		],
		[
            'attribute' => 'style',
			'value' => function($model) {
				return $model->styleInfos[$model->style];
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
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
