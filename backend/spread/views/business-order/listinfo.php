<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'sort_big',
		'sort',
        'name',
		//'order_num',
		'order_range',
		[
			'attribute' => 'order_diff',
			'value' => function($model) {
				if (empty($model->order_range)) {
					return 0;
				}
			    $orderRange = explode('-', $model->order_range);
			    $orderStart = isset($orderRange[0]) ? $orderRange[0] : 0;
			    $orderEnd = isset($orderRange[1]) ? $orderRange[1] : 0;
				return $orderEnd - $orderStart + 1;
			},
		],
		[
            'attribute' => 'groupon_id',
            'value'=> function($model){
				return $model->grouponInfos[$model->groupon_id];
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
        ],
		[
			'attribute' => 'status',
			'value' => function($model) {
			    return $model->statusInfos[$model->status];
			},
		],*/
		[
			'format' => 'raw',
			'attribute' => 'export',
			'value' => function($model) {
				$url = Url::to(['business-order/export']);
				return "<a href='{$url}?id={$model->id}'>导出</a>";
			},
		],
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
