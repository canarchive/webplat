<?php

namespace website\models;

use Yii;
use common\helpers\Tree;
use common\models\WebsiteModel;
use yii\helpers\ArrayHelper;

class IndexSort extends WebsiteModel
{
	public $brand_code;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%index_sort}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['orderlist'], 'default', 'value' => 0],
			[['description', 'orderlist', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => '名称',
			'code' => '代码',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '状态',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}
}
