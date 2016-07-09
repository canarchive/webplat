<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => function($model) {
				return $model->getAttachmentImg($model->logo);
			}
		],
		[
            'attribute' => 'company_id',
			'value' => function($model) {
				return $model->companyInfos[$model->company_id];
			},
		],
		[
            'attribute' => 'sort_id',
			'value' => function($model) {
				return $model->sortInfos[$model->sort];
			},
		],
		'hotline',
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
			}
		],
        [   
            'format' => 'raw',
            'attribute' => 'operation',
            'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
                $opeStr = '';
                $elems = ['merchant_merchant-realcase_add', 'merchant_merchant_designer_add', 'merchant_merchant_working_add'];
                foreach ($elems as $elem) {
                    if (isset($menus[$elem])) {
                    $opeStr .= "<a href='{$menus[$elem]['url']}?merchant_id={$model->id}'>{$menus[$elem]['name']}</a>";
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
