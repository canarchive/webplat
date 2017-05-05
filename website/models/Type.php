<?php

namespace website\models;

use common\models\WebsiteModel;

/**
 * This is the model class for table "type".
 */
class Type extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'default', 'value' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '类型ID',
            'name' => '名称',
            'status' => '状态',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停',
			'1' => '正常',
		];
		return $datas;
	}
}
