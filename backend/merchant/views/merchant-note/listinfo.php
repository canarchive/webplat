<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'attribute' => 'owner_merchant_id',
			'value' => function ($model) {
				$merchantInfo = $model->merchantInfo;
				$return = empty($merchantInfo) ? '' : $merchantInfo['name'];
				return $return;
			}
        ],
		[
			'attribute' => 'owner_merchant_id',
			'value' => function ($model) {
				$mobile = $model->mobile;
				$return = empty($mobile) ? '' : $mobile;
				return $return;
			}
        ],
		'content',
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
			'format' => 'raw',
            'attribute' => 'operation',
            'value'=> function($model){
				$mobileId = $model->mobileId;
				$url = '/spread/owner-dispatch/update.html?id=' . $mobileId; 
				return "<a href='{$url}' target='_blank'>备注</a>";
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
