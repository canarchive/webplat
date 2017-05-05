<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
        [
            'attribute' => 'type_id',
            'value' => $model->type_id > 0 ? $model->typeInfos[$model->type_id] : '',
        ],
        'orderlist',
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
        'values',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

