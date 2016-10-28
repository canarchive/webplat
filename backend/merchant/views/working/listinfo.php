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
				$url = Yii::getAlias('@gallerycmsurl') . Url::to(['/decoration-company/show-working', 'id' => $model->id]);
				return "<a href='{$url}' target='_blank'>{$model->name}</a>";
			},
		],
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				return $model->getAttachmentImg($model->thumb);
			}
		],
		[
			'format' => 'raw',
            'attribute' => 'merchant_id',
			'value' => function($model) {
				if ($model->merchant_id > 0) {
				    return $model->merchantInfo['nameUrl'];
				}
				return '';
			},
		],
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
				return isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : $model->status;
			}
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
