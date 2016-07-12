<?php

namespace merchant\models;

use Overtrue\Pinyin\Pinyin;
use common\models\MerchantModel;

/**
 * This is the model class for table "merchant".
 */
class Company extends MerchantModel
{
	public $region_level1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company}}';
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
		//print_r($_POST);exit();
        return [
            [['name', 'region_code', 'code'], 'required'],
            ['code', 'unique', 'targetClass' => '\merchant\models\Company', 'message' => 'This code has already been taken.'],
            [['status', 'logo'], 'default', 'value' => 0],
			/*['region_code', 'default', 'value' => function($model, $attribute) {
				$specials = ['11000', '12000', '310000', '71000', '81000', '82000'];
				if (in_array($model->region_level1, $specials)) {
					return $model->region_level1;
				}
				return $model->region_code;
			}],*/
			['code_initial', 'default', 'value' => function($model, $attribute) {
                $spell = substr(Pinyin::letter(trim($model->name)), 0, 1);
				return $spell;
			}],
			//[['postcode', 'code', 'code_initial'], 'default', 'value' => ''],
			[['name_full', 'postcode', 'hotline', 'address', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '公司ID',
			'code' => '代码',
			'code_initial' => '首写字母',
			'region_level1' => '省级地区',
			'region_code' => '地区代码',
			'name_full' => '全称',
            'name' => '名称',
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

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['logo'];
		$this->_updateSingleAttachment('logo', $fields);

		return true;
	}	

	public function getInfos()
	{
		$infos = $this->find()->orderBy(['code_initial' => SORT_ASC])->indexBy('code')->all();

		return $infos;
	}

	public function getInfoByCode($code)
	{
		$info = $this->findOne(['code' => $code]);
		return $info;
	}
}
