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
		'num_designer',
        [   
            'format' => 'raw',
            'attribute' => 'designerinfo',
            'value' => function($model) {
                $companyInfo = Yii::$app->params['companyInfo'];
                $is_joined = Yii::$app->params['is_joined'];
                $menus = $this->context->menuInfos['menus'];
                $opeStr = '';
                $elems = ['merchant_merchant-designer_listinfo', 'merchant_merchant-designer_add'];
                foreach ($elems as $elem) {
                    if (isset($menus[$elem])) {
                    $opeStr .= "<a href='{$menus[$elem]['url']}?city_code={$companyInfo['code_short']}&is_joined={$is_joined}&merchant_id={$model->id}'>{$menus[$elem]['name']}</a><br />";
                    }
                }
                return $opeStr;
            },  
        ],
		'num_owner',
        [   
            'format' => 'raw',
            'attribute' => 'ownerinfo',
            'value' => function($model) {
                $companyInfo = Yii::$app->params['companyInfo'];
                $is_joined = Yii::$app->params['is_joined'];
                $menus = $this->context->menuInfos['menus'];
                $opeStr = '';
                $elems = ['merchant_merchant-owner_listinfo', 'merchant_merchant-owner_add'];
                foreach ($elems as $elem) {
                    if (isset($menus[$elem])) {
                    $opeStr .= "<a href='{$menus[$elem]['url']}?city_code={$companyInfo['code_short']}&is_joined={$is_joined}&merchant_id={$model->id}'>{$menus[$elem]['name']}</a><br />";
                    }
                }
                return $opeStr;
            },  
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
