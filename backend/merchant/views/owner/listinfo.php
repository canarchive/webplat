<?php
use yii\helpers\Url;

$this->params['noPjax'] = true;
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
            'attribute' => 'realcase_id',
            'value' => function($model) {
				$realcaseInfo = $model->realcaseInfo;
				$opeStr = '';
                $menus = $this->context->menuInfos['menus'];
				if (empty($realcaseInfo)) {
					$menu = isset($menus['merchant_merchant-realcase_add']) ? $menus['merchant_merchant-realcase_add'] : [];
					$opeStr .= empty($menu) ? '' : "<a href='{$menu['url']}?owner_id={$model->id}'>添加</a><br />";
				} else {
					$menu = isset($menus['merchant_merchant-realcase_update']) ? $menus['merchant_merchant-realcase_update'] : [];
					$opeStr .= empty($menu) ? '' : "<a href='{$menu['url']}?id={$model->realcase_id}'>编辑</a><br />";
                    //$opeStr .= "--<a href='{$realcaseInfo['infoUrl']}' target='_blank'>查看</a>";
				}
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'working_id',
            'value' => function($model) {
				$workingInfo = $model->workingInfo;
				$opeStr = '';
                $menus = $this->context->menuInfos['menus'];
				if (empty($workingInfo)) {
					$menu = isset($menus['merchant_merchant-working_add']) ? $menus['merchant_merchant-working_add'] : [];
					$opeStr .= empty($menu) ? '' : "<a href='{$menu['url']}?owner_id={$model->id}'>添加</a><br />";
				} else {
					$menu = isset($menus['merchant_merchant-working_update']) ? $menus['merchant_merchant-working_update'] : [];
					$opeStr .= empty($menu) ? '' : "<a href='{$menu['url']}?id={$model->working_id}'>编辑</a><br />";
                    //$opeStr .= "--<a href='{$workingInfo['infoUrl']}' target='_blank'>查看</a>";
				}
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'num_comment',
            'value' => function($model) {
				$cityCode = $model->city_code;
                $is_joined = $model->is_joined;
				$commentInfos = $model->commentInfos;
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_merchant-comment_listinfo'];
				$opeStr = "<a href='{$listMenu['url']}?city_code={$cityCode}&is_joined={$is_joined}&owner_id={$model->id}'>{$model->num_comment}</a>";
				if (count($commentInfos) < 7) {
					$menu = isset($menus['merchant_merchant-comment_add']) ? $menus['merchant_merchant-comment_add'] : [];
					$opeStr .= empty($menu) ? '' : "--<a href='{$menu['url']}?owner_id={$model->id}'>添加</a><br />";
				} 
                return $opeStr;
            },  
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
