<?php

namespace shoot\models;

use common\models\ShootModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "photographer".
 */
class Photographer extends ShootModel
{
    public $category;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%photographer}}';
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
            [['name'], 'required'],
			['code', 'unique', 'targetClass' => '\shoot\models\Photographer', 'message' => '代码已经被使用。'],
            //[['orderlist'], 'integer'],
            [['orderlist', 'logo', 'status'], 'default', 'value' => 0],
			['description', 'safe'],
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
            'nickname' => '昵称',
            'title' => '头衔',
            'photo' => '头像',
            'brief' => '简介',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
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

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['photo'];
		$this->_updateSingleAttachment('photographer', $fields);

		return true;
	}

	public function getCategoryInfos()
	{
		$category = new Category();
		$infos = $category->getSelectInfos();
		return $infos;
	}
}
