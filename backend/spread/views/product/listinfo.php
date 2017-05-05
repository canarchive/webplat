<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'main_photo',
			'value' => function($model) {
				return $model->getAttachmentImg($model->main_photo);
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
		[
			'attribute' => 'brand_id',
			'value' => function($model) {
				if ($model->brand_id > 0) {
					return $model->brandInfos[$model->brand_id];
				}
				return '';
			},
		],
		[
			'attribute' => 'category_id',
			'value' => function($model) {
				if ($model->category_id > 0) {
					return $model->categoryInfos[$model->category_id];
				}
				return '';
			},
		],
		[
			'attribute' => 'merchant_id',
			'value' => function($model) {
				if ($model->merchant_id > 0) {
					return $model->merchantInfos[$model->merchant_id];
				}
				return '';
			},
		],
        [   
            'format' => 'raw',
            'attribute' => 'market_price',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="market_price" type="text" style="width:60px;" value="' . $model->market_price . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'market_price\', this.value);">';
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'price',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="price" type="text" style="width:60px;" value="' . $model->price . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'price\', this.value);">';
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
        'status',
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
