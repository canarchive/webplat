<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Merchant extends MerchantModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant}}';
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
			[['logo'], 'integer'],
			[['logo', 'company_id', 'category_id', 'status'], 'default', 'value' => '0'],
			[['sort', 'hotline', 'postcode', 'address', 'description'], 'safe'],
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
			'company_id' => '所属公司',
			'category_id' => '分类',
			'sort' => '类别',
            'logo' => 'LOGO',
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

	protected function getCompanyInfos()
	{
		$infos = ArrayHelper::map(Company::find()->all(), 'id', 'name');
		return $infos;
	}

	protected function getCategoryInfos()
	{
		$infos = ArrayHelper::map(Category::find()->all(), 'id', 'name');
		return $infos;
	}
}
