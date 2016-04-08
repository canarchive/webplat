<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'attribute' => 'name',
            'label' => Yii::t('rbac-admin', 'Name'),
        ],
        [
            'attribute' => 'ruleName',
            'label' => Yii::t('rbac-admin', 'Rule Name'),
        ],
        [
            'attribute' => 'description',
            'label' => Yii::t('rbac-admin', 'Description'),
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
