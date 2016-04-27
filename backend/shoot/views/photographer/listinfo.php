<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'photo',
			'value' => function($model) {
				return $model->getAttachmentImg($model->photo);
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
        'name',
        'nickname',
        'title',
		[
			'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
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
        /*[   
            'format' => 'raw',
            'attribute' => 'description',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<textarea name="description" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'description\', this.value);">' . $model->description . '</textarea>';
            },  
		],*/
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
