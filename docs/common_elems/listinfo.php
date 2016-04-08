<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
        'category_id',
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => function($model) {
				return Yii::$app->formatter->asImage($model->logo);
			},
		],
		[
            'attribute' => 'created_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'updated_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
		[
            'attribute' => 'is_show',
			'value' => function($model) {
				return $model->isShowInfos[$model->is_show];
			},
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
