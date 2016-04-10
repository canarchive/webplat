<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		'id',
        'keyword',
		'visit_num',
		'visit_num_success',
		'pc_num',
		'pc_num_success',
		'h5_num',
		'h5_num_success',
		[
            'attribute' => 'created_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],		
		[
            'attribute' => 'updated_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],		
		[
            'attribute' => 'created_at_success',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->created_at_success);
            },
        ],		
		[
            'attribute' => 'updated_at_success',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->updated_at_success);
            },
        ],		
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
