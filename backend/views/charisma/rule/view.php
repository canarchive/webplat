<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'name',
        'className',
		[
            'attribute' => 'createdAt',
            'value'=> date('Y-m-d H:i:s',$model->createdAt),
        ],
		[
            'attribute' => 'updatedAt',
            'value'=> date('Y-m-d H:i:s',$model->updatedAt),
        ],

    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

