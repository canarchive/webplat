<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class WorkingStatus extends MerchantModel
{
	public $picture_living;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%working_status}}';
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
            [['working_id'], 'required'],
			[['status'], 'default', 'value' => ''],
			[['picture_living', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'working_id' => '所属公司',
            'picture_living' => '效果图',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'' => '',
			'start' => '开始',
			'hydropower' => '水电',
			'wood' => '泥木',
			'paint' => '油漆',
			'finish' => '竣工',
		];
		return $datas;
	}	

	protected function getWorkingInfos()
	{
		$infos = ArrayHelper::map(Working::find()->all(), 'id', 'name');
		return $infos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$this->_updateMulAttachment('working_status', 'picture_living');

		return true;
	}	

	public function getInfos($where)
	{
	}
}
