<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		'id',
		//'info_id',
		//'info_name',
		'city_code',
        'from_type',
		'name',
		'mobile',
		'channel',
		'form_type',
		'city_input',
		'area_input',
		'position',
		'note',
		'keyword',
		'matchtype',
		'adposition',
		'pagenum',
		[
			'format' => 'raw',
			'attribute' => 'url_full',
			'value' => function ($model) {
				$content = '<a href="url:' . urldecode($model->url_full) . '">' . Html::encode(mb_substr(urldecode($model->url_full), 0, 20, 'utf-8')) . '</a>';
				$content .= mb_strlen(urldecode($model->url_full)) > 20 ? '<a href="javascript:void(0);" data-placement="top" data-toggle="popover" data-content="' . urldecode($model->url_full) . '" title="URL"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>全部</a>' : "";
				return $content;
			},
		],
		'ip',
		'city',
		[
            'attribute' => 'created_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],		
		[
			'format' => 'raw',
			'attribute' => 'message',
			'value' => function ($model) {
				$content = Html::encode(mb_substr($model->message, 0, 20, 'utf-8'));
				$content .= mb_strlen($model->message) > 20 ? '<a href="javascript:void(0);" data-placement="top" data-toggle="popover" data-content="' . $model->message . '" title="message"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>全部</a>' : "";
				return $content;
			},
		],
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
