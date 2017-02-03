<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		[
            'class' => 'yii\grid\CheckboxColumn',
		],
		[
			'format' => 'raw',
		    'attribute' => 'orderlist',
			'value' => function($model) {
				return '<input name="orderlists[' . $model->id . ']" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c">';
			},
		],
        'id',
		'code',
		[
			'format' => 'raw',
			'attribute' => 'logo',
			'value' => function($model) {
				return $model->getAttachmentImg($model->logo);
			}
		],
        'name',
		[
			'attribute' => 'category_id',
			'value' => function($model) {
				if ($model->category_id > 0) {
					return $model->categoryInfos[$model->category_id];
				}
				return '';
			},
		],
        'status',
        [
            'format' => 'raw',
            'attribute' => 'description',
            'value' => function ($model) {
				$content = "<textarea row='2' name='descriptions[{$model->id}]'>{$model->description}</textarea>";
				return $content;
                //$content = Html::encode(mb_substr($model->description, 0, 20, 'utf-8'));
                //$content .= mb_strlen($model->description) > 20 ? '<a href="javascript:void(0);" data-placement="top" data-toggle="popover" data-content="' . $model->description . '" title="description"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>全部</a>' : "";
                return $content;
            },
        ],
    ],
];
?>
<?php $form = ActiveForm::begin(['action' => Yii::$app->request->url, 'options' => ['enctype' => 'multipart/form-data']]); ?>

<div class="index">
    <p><b><?= $grouponInfo['name']; ?></b>绑定的品牌信息</p>
    <?php
    Pjax::begin(['enablePushState'=>false]);
    echo GridView::widget($gridViewParams);
    Pjax::end();
    ?>
</div>
<div class="form-group">
    <?= Html::submitButton('绑定到团购会', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
