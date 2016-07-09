<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class MerchantRealcase extends MerchantModel
{
	public $aptitude;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant_realcase}}';
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
			[['logo', 'picture'], 'integer'],
			[['logo', 'picture', 'company_id', 'category_id', 'status'], 'default', 'value' => '0'],
			[['aptitude', 'sort', 'hotline', 'postcode', 'brief', 'address', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '商家ID',
            'name' => '名称',
            'breif' => '简介',
			'company_id' => '所属公司',
			'category_id' => '分类',
			'sort' => '类别',
            'logo' => 'LOGO',
            'picture' => '描述配图',
            'aptitude' => '资质',
			'hotline' => '电话',
			'postcode' => '邮编',
			'address' => '地址',
            'description' => '描述',
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

	protected function getSortInfos()
	{
		$datas = [
			'focus' => '关注',
			'discuss' => '洽谈',
			'cooperation' => '合作',
			'deepco' => '深度合作',
		];
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['logo', 'picture'];
		$this->_updateSingleAttachment('merchant', $fields);
		$this->_updateMulAttachment('merchant', 'aptitude');

		return true;
	}	

	protected function getMerchantInfos()
	{
		$infos = ArrayHelper::map(Merchant::find()->all(), 'id', 'name');
		return $infos;
	}
}
