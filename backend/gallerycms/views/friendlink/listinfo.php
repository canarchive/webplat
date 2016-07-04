<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
		[
			'attribute' => 'type',
			'value' => function($model) {
				if (!empty($model->type)) {
					return $model->typeInfos[$model->type];
				}
				return '';
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'url',
			'value' => function($model) {
				return "<a href='{$model->url}' target='_blank'>{$model->url}</a>";
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => function($model) {
				return $model->getAttachmentImg($model->picture);
			}
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
		]
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
