<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
            'attribute' => 'name',
			'value' => function($model) {
				$url = Yii::getAlias('@gallerycmsurl') . Url::to(['/decoration-company/show', 'id' => $model->id]);
				//return "<a href='{$url}' target='_blank'>{$model->name}</a>";
				return "{$model->name}";
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => function($model) {
				return $model->getAttachmentImg($model->logo);
			}
		],
		/*'city_code',
		[
            'attribute' => 'sort_id',
			'value' => function($model) {
				$return = isset($model->sortInfos[$model->sort]) ? $model->sortInfos[$model->sort] : '';
			},
		],*/
        [   
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="orderlist" type="text" style="width:50px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
            },  
        ],
		[
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
            'attribute' => 'num_comment',
            'value' => function($model) {
				$cityCode = $model->city_code;
                $is_joined = $model->is_joined;
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_merchant-comment_listinfo'];
				$opeStr = "<a href='{$listMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>{$model->num_comment}</a>";
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'num_realcase',
            'value' => function($model) {
				$cityCode = $model->city_code;
                $is_joined = $model->is_joined;
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_merchant-realcase_listinfo'];
				$opeStr = "<a href='{$listMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>{$model->num_realcase}</a>";
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'num_working',
            'value' => function($model) {
				$cityCode = $model->city_code;
                $is_joined = $model->is_joined;
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_merchant-working_listinfo'];
				$opeStr = "<a href='{$listMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>{$model->num_working}</a>";
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'num_designer',
            'value' => function($model) {
				$cityCode = $model->city_code;
                $is_joined = $model->is_joined;
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_merchant-designer_listinfo'];
				$addMenu = $menus['merchant_merchant-designer_add'];
                $opeStr = "<a href='{$addMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>添加</a>";
				$opeStr .= "---<a href='{$listMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>{$model->num_designer}</a>";
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'num_owner',
            'value' => function($model) {
				$cityCode = $model->city_code;
                $is_joined = $model->is_joined;
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_merchant-owner_listinfo'];
				$addMenu = $menus['merchant_merchant-owner_add'];
                $opeStr = "<a href='{$addMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>添加</a>";
				$opeStr .= "---<a href='{$listMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&merchant_id={$model->id}'>{$model->num_owner}</a>";
                return $opeStr;
            },  
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
