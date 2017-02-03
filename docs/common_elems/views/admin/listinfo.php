<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => function($model) {
				return Yii::$app->formatter->asImage($model->logo);
			},
		],
        [   
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="orderlist" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
            },  
        ],
		[
            'attribute' => 'company_id',
            'value'=> function($model){
				if ($model->company_id < 1) {
					return '';
				}
                return $model->companyInfos[$model->company_id];
            },
        ],
		[
            'attribute' => 'created_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'url_full',
			'value' => function ($model) {
				$content = '<a href="url:' . urldecode($model->url_full) . '">' . Html::encode(mb_substr(urldecode($model->url_full), 0, 20, 'utf-8')) . '</a>';
				$content .= mb_strlen(urldecode($model->url_full)) > 20 ? '<a href="javascript:void(0);" data-placement="top" data-toggle="popover" data-content="' . urldecode($model->url_full) . '" title="URL"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>全部</a>' : "";
				return $content;
			},
		],
    ],
];

$searchContent = $this->render('/conversion/_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
