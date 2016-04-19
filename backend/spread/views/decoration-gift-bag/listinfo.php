<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
            'attribute' => 'decoration_id',
            'value'=> function($model){
				if ($model->decoration_id < 1) {
					return '';
				}
                return $model->decorationInfos[$model->decoration_id];
            },
        ],		
		[
            'attribute' => 'gift_bag_id',
            'value'=> function($model){
				if ($model->gift_bag_id < 1) {
					return '';
				}
                return $model->giftBagInfos[$model->gift_bag_id];
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
