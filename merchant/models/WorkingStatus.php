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
			'electric' => '水电',
			'cement' => '泥木',
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

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('status')->limit($limit)->all();
		foreach ($infos as $info) {
            $condition = [ 
                'info_table' => 'working_status',
                'info_field' => 'picture_living',
                'info_id' => $info->id,
                'in_use' => 1,
            ];  
            $datas = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
            $livingInfos = []; 
            foreach ($datas as $attachment) {
                $url = $attachment->getUrl();
                $livingInfos[] = [ 
                    'url' => $url,
                    'name' => $attachment['filename'],
                    'description' => $attachment['description'],
                ];  
            }    
            $info->picture_living = $livingInfos;
		}

		return $infos;
	}
}
