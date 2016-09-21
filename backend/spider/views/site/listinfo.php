<?php
use yii\helpers\Url;
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
		[
			'format' => 'raw',
			'attribute' => 'url',
			'value' => function($model) {
				return Yii::$app->formatter->asUrl($model->url);
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'url_mobile',
			'value' => function($model) {
				return Yii::$app->formatter->asUrl($model->url_mobile);
			},
		],
		[
			'format' => 'raw',
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
		[
			'format' => 'raw',
            'attribute' => 'spider_companylist',
			'value' => function($model) {
				$url = Yii::getAlias('@spiderurl') . Url::to(['/house/spider/companylist']);
				return Html::a('采集列表', $url, ['target' => '_blank']);
			}
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
