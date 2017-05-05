<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'name',
            'value'=> function($model){
				$domain = Yii::$app->params['baseDomain'];
				$url = "http://{$model->code_short}.{$domain}";
				return "<a href='{$url}' target='_blank'>{$model->name}</a>";
            },
		],
		'code_short',
		'code',
		'num_merchant',
		'num_merchant_self',
		'hotline',
		//'postcode',
		//'address',
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
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
