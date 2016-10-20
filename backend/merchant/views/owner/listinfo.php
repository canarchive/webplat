<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
		'community_name',
		'area',
		[
            'attribute' => 'house_type',
			'value' => function($model) {
				$return = isset($model->houseTypeInfos[$model->house_type]) ? $model->houseTypeInfos[$model->house_type] : $model->house_type;
				return $return;
			}
		],
		[
            'attribute' => 'style',
			'value' => function($model) {
				$return = isset($model->styleInfos[$model->style]) ? $model->styleInfos[$model->style] : $model->style;
				return $return;
			}
		],
		[
            'attribute' => 'decoration_type',
			'value' => function($model) {
				$return = isset($model->decorationTypeInfos[$model->decoration_type]) ? $model->decorationTypeInfos[$model->decoration_type] : $model->decoration_type;
				return $return;
			}
		],
		'decoration_price',
		/*[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				return $model->getAttachmentImg($model->thumb);
			}
        ],*/
		[
			'format' => 'raw',
            'attribute' => 'merchant_id',
			'value' => function($model) {
				return $model->merchantInfo['nameUrl'];
			},
		],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		/*[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
		],*/
		[
            'attribute' => 'status',
			'value' => function($model) {
				$return = isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : $model->status;
				return $return;
			}
		],
        [   
            'format' => 'raw',
            'attribute' => 'operation',
            'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
                $opeStr = '';
                $elems = ['merchant_merchant-realcase_add', 'merchant_merchant-working_add'];
                foreach ($elems as $elem) {
                    if (isset($menus[$elem])) {
                    $opeStr .= "<a href='{$menus[$elem]['url']}?owner_id={$model->id}'>{$menus[$elem]['name']}</a><br />";
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
