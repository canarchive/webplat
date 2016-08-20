<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$appMenus = $this->context->menuInfos['appMenus'];
$deleteUrl = isset($appMenus['deleteUrl']) ? $appMenus['delete']['url'] : '';
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        [
            'class' => 'yii\grid\CheckboxColumn',
        ],
        'id',
		[
			'format' => 'raw',
		    'attribute' => 'orderlist',
			'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : '';
				return '<input name="orderlist" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
			},
		],
		[
            'attribute' => 'groupon_id',
            'value'=> function($model){
				$info = $model->grouponInfo;
				return isset($info['name']) ? $info['name'] : '';
            },
        ],
		[
            'attribute' => 'brand_id',
            'value'=> function($model){
				$info = $model->brandInfo;
				return isset($info['name']) ? $info['name'] : '';
            },
        ],
        [
            'format' => 'raw',
            'attribute' => 'description',
            'value' => function ($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : '';
				$content = "<textarea row='2' name='descriptions[{$model->id}]' onchange='updateElemByAjax(\"{$updateUrl}\", {$model->id}, \"description\", this.value)'>{$model->description}</textarea>";
				return $content;
            },
        ],
    ],
];
$searchContent = $this->render('_search', array_merge($searchInfos, ['model' => $searchModel]));

echo $searchContent;

$appMenus = $this->context->menuInfos['appMenus'];
$deleteUrl = isset($appMenus['delete']) ? $appMenus['delete']['url'] : '';
$form = ActiveForm::begin(['action' => $deleteUrl]);
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'noActionColumn' => true]);
if (!empty($deleteUrl)) {
	echo '<div class="form-group">'
		. Html::submitButton('删除指定信息', ['class' => 'btn btn-primary'])
		. '</div>';
}
ActiveForm::end();
