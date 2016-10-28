<?php

namespace merchant\house\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Designer extends MerchantModel
{
	public $select;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%designer}}';
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
            [['name', 'photo', 'merchant_id', 'city_code'], 'required'],
            [['orderlist', 'status', 'merchant_id'], 'default', 'value' => 0],
			[['description', 'city_code', 'design_concept', 'score_praise', 'score_active', 'sample_num', 'title', 'record', 'aptitude'], 'safe'],
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
			'title' => '头衔',
			'aptitude' => '资质',
			'record' => '贡献',
			'merchant_id' => '公司ID',
			'design_concept' => '设计理念',
            'photo' => '照片',
			'score_praise' => '口碑值',
			'score_active' => '活跃值',
			'sample_num' => '作品数',
            'orderlist' => '排序',
            'description' => '描述',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '隐藏',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['photo'];
		$this->_updateSingleAttachment('professor', $fields);

		return true;
	}	

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['photo'] = $info->getAttachmentUrl($info['photo']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getMerchantInfos()
	{
		$infos = $this->_getMerchantInfos(['is_joined' => 1]);
		return $infos;
	}
}
