<?php

namespace spread\models;

use common\models\SpreadModel;

/**
 * This is the model class for table "template".
 */
class Template extends SpreadModel
{
    public $fileUpload; 

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%template}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$fileUpload = $this->fileUploadBehaviorComponent;
		$fileUpload['attribute'] = 'logo';
		//print_r($fileUpload);exit();
		$behaviors = [
		    $this->timestampBehaviorComponent,
			//$fileUpload,
		];
		//print_r($behaviors);exit();
		return $behaviors;
    }

    public function scenarios()
    {
        return [
            'create' => ['name', 'code', 'logo', 'description', 'orderlist', 'status'],
            'update' => ['name', 'logo', 'description', 'orderlist', 'status'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            ['code', 'required', 'on' => ['update']],
            ['code', 'unique', 'targetClass' => '\spread\models\Template', 'message' => 'This code has already been taken.', 'on' => ['update']],
            [['orderlist', 'status'], 'default', 'value' => 0],
			['description', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '模板ID',
			'code' => '代码',
            'name' => '名称',
            'logo' => 'LOGO',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}	
}
