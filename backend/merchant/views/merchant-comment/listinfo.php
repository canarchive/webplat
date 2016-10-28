<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['noPjax'] = true;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
            'attribute' => 'merchant_id',
			'value' => function($model) {
				if ($model->merchant_id > 0) {
				    return $model->merchantInfo['nameUrl'];
				}
				return '';
			},
		],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
			'format' => 'raw',
			'attribute' => 'content',
			'value' => function ($model) {
				$content = '<a href="url:' . urldecode($model->content) . '">' . Html::encode(mb_substr(urldecode($model->content), 0, 20, 'utf-8')) . '</a>';
				$content .= mb_strlen(urldecode($model->content)) > 20 ? '<a href="javascript:void(0);" data-placement="top" data-toggle="popover" data-content="' . urldecode($model->content) . '" title="URL"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>全部</a>' : "";
				return $content;
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
