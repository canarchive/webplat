<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class GiftBag extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gift_bag}}';
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
            [['name', 'sort'], 'required'],
            [['thumb', 'limit_mobile', 'orderlist', 'status', 'price'], 'default', 'value' => 0],
			[['description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'thumb' => '图片',
            'sort' => '类别',
            'price' => '价格',
            'limit_mobile' => '每人限量',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getSortInfos()
	{
		$datas = [
			'update' => '品类升级',
			'acc' => '配饰礼包',
			'electric' => '电器礼包',
			'cooking' => '厨具礼包',
			'clean' => '保洁礼包',
			'check' => '检测礼包',
			'design' => '设计礼包',
			'individuation' => '个性化',
		];

		return $datas;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停使用',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$attachment = new \spread\models\Attachment();
		$this->_updateSingleAttachment($attachment, 'gift_bag', $fields);

		return true;
	}	
}
