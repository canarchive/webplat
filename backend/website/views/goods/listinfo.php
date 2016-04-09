<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		[
			'class' => 'yii\grid\CheckboxColumn',
			'options' => [
				'name' => 'select_elems[]',
			],
		],
        'id',
		'orderlist',
        'name',
		[
            'attribute' => 'category_id',
			'value' => function($model) {
				return $model->categoryInfos[$model->category_id];
			},
		],
		'period',
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
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);

$menuInfos = $this->context->menuInfos['menus'];
if (in_array('website_goods-snapup_add', array_keys($menuInfos))) {
	$url = $menuInfos['website_goods-snapup_add']['url'];
	$operationName = '加入抢购';

	echo '<div class="form-group">'
		. Html::submitButton('选中项加入抢购', ['onclick' => 'operationForSelected("' . $url . '");', 'class' => 'btn btn-primary'])
		. '</div>';
}
