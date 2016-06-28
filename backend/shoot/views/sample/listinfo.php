<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'filepath',
			'value' => function($model) {
				return $model->getAttachmentImg($model->id);
			}
		],		
		[
			'attribute' => 'photographer_id',
			'value' => function($model) {
				$info = $model->photographerInfo;
				return isset($info['name']) ? $info['name'] : '';
			},
		],
		[
			'attribute' => 'goods_id',
			'value' => function($model) {
				$info = $model->goodsInfo;
				return isset($info['name']) ? $info['name'] : '';
			},
		],
		[
            'format' => 'raw',
            'attribute' => 'name',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="name" type="text" style="width:100px;" value="' . $model->name . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'name\', this.value);">';
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
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        [   
            'format' => 'raw',
            'attribute' => 'description',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<textarea name="description" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'description\', this.value);">' . $model->description . '</textarea>';
            },  
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
