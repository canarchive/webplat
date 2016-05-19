<?php
use yii\helpers\Url;

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'category_id',
			'value' => $model->categoryInfos[$model->category_id],
		],
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => $model->getAttachmentImg($model->thumb, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'name',
			'value' => '<a href="' . Yii::getAlias('@gallerycmsurl') . Url::to(['/site/show', 'id' => $model->id]) . '" target="_blank">' . $model->name . '</a>',
		],
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		[
			'format' => 'raw',
			'attribute' => 'content',
			'value' => $model->content,
		],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

