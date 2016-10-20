<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
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
		'city_code',
		[
            'attribute' => 'sort_id',
			'value' => function($model) {
				$return = isset($model->sortInfos[$model->sort]) ? $model->sortInfos[$model->sort] : '';
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
            'attribute' => 'operation',
            'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
                $opeStr = '';
                $elems = ['merchant_merchant-designer_add', 'merchant_merchant-owner_add'];
                //$elems = ['merchant_merchant-realcase_add', 'merchant_merchant-designer_add', 'merchant_merchant-working_add', 'merchant_merchant-owner_add'];
                foreach ($elems as $elem) {
                    if (isset($menus[$elem])) {
                    $opeStr .= "<a href='{$menus[$elem]['url']}?merchant_id={$model->id}'>{$menus[$elem]['name']}</a><br />";
                    }
                }
                return $opeStr;
                //$url = Url::to(['business-order/export']);
                //return "<a href='{$url}?id={$model->id}'>导出</a>";
            },  
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
