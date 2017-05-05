<?php

namespace website\models;

use yii\helpers\ArrayHelper;
use common\models\WebsiteModel;

/**
 * This is the model class for table "attribute".
 */
class Attribute extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type_id'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
            [['values'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '属性ID',
            'type_id' => '类型ID',
            'name' => '属性名称',
            'values' => '可选值',
            'orderlist' => '排序',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
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

    public function getTypeInfos()
    {
        $infos = ArrayHelper::map(Type::find()->all(), 'id', 'name');
        return $infos;
    }
}
