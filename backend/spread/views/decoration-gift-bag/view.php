<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'decoration_id',
			'value' => $model->decoration_id > 0 ? $model->decorationInfos[$model->decoration_id] : '',
		],		
		[
			'attribute' => 'gift_bag_id',
			'value' => $model->gift_bag_id > 0 ? $model->giftBagInfos[$model->gift_bag_id] : '',
		],		
		'orderlist',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

