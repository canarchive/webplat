<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'holding_at',
		'signup_base',
		'signup_number',
		'address',
		[
			'attribute' => 'company_id',
			'value' => $model->company_id > 0 ? $model->companyInfos[$model->company_id] : '',
		],
		[
            'attribute' => 'start_at',
            'value'=> date('Y-m-d H:i:s',$model->start_at),
        ],
		[
            'attribute' => 'end_at',
            'value'=> date('Y-m-d H:i:s',$model->end_at),
        ],
		[
			'format' => 'raw',
			'attribute' => 'picture',
			'value' => $model->getAttachmentImg($model->picture, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'picture_lottery',
			'value' => $model->getAttachmentImg($model->picture_lottery, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'picture_small',
			'value' => $model->getAttachmentImg($model->picture_small, false),
		],
		[
			'format' => 'raw',
			'attribute' => 'map',
			'value' => $model->getAttachmentImg($model->map, false),
		],
		'arrive_line',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		'lottery_number',
		'lottery_rule',
		'bonus_number',
		'bonus_rule',
		'gift_bag_number',
		'gift_bag_rule',
		'sms',
		'sms_new',
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

