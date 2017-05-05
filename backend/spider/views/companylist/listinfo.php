<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'site_code',
		'city_code',
		'page',
		[
			'format' => 'raw',
			'attribute' => 'url_source',
			'value' => function($model) {
				return Yii::$app->formatter->asUrl($model->url_source, ['target' => '_blank']);
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
