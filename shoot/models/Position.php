<?php

namespace shoot\models;

use common\models\ShootModel;

class Position extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%position}}';
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
            [['name', 'type'], 'required'],
            [['orderlist', 'status', 'picture', 'picture_mobile', 'picture_ext'], 'default', 'value' => 0],
			[['description', 'url', 'name_ext'], 'safe'],
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
			'name_ext' => '名称-预留',
			'type' => '类型',
			'url' => 'URL',
			'orderlist' => '排序',
			'picture' => '图片',
			'picture_mobile' => '图片-H5',
			'picture_ext' => '图片-预留',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'description' => '描述',
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
		$datas = [
			'index_slice' => '首页-幻灯(619X649,1920X1049)',
			'index_goods' => '首页-商品(559X311)',
			'index_goods_text' => '首页-图文商品(559X311)',
			'index_sample' => '首页-样片(500X500)',
			'list_left' => '列表页-左侧(770X365)',
			'list_right' => '列表页-右侧(400X738',
			'list_mobile' => '列表页-移动端(1080X897)',
		];
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['picture', 'picture_mobile', 'picture_ext'];
		$this->_updateSingleAttachment('position', $fields);

		return true;
	}	
}
