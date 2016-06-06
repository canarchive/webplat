<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
            'attribute' => 'photographer_id',
            'value'=> function($model){
				if ($model->photographer_id < 1) {
					return '';
				}
                return $model->photographerInfos[$model->photographer_id];
            },
        ],		
		[
            'attribute' => 'category_id',
            'value'=> function($model){
				if ($model->category_id < 1) {
					return '';
				}
                return $model->categoryLevelInfos[$model->category_id];
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
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
