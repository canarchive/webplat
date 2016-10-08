<?php

namespace merchant\models;

use Overtrue\Pinyin\Pinyin;
use common\models\MerchantModel;

/**
 * This is the model class for table "merchant".
 */
class Company extends MerchantModel
{
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
            [['name', 'code'], 'required'],
            //['code', 'unique', 'targetClass' => '\merchant\models\Company', 'message' => 'This code has already been taken.'],
            [['status', 'logo'], 'default', 'value' => 0],
			['code_initial', 'default', 'value' => function($model, $attribute) {
                $spell = substr(Pinyin::letter(trim($model->name)), 0, 1);
				return $spell;
			}],
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

	public function getInfos($where = [])
	{
		$infos = $this->find()->where($where)->orderBy(['code_initial' => SORT_ASC])->indexBy('code')->all();

		return $infos;
	}

	public function getInfoByCode($code)
	{
		$info = $this->findOne(['code' => $code]);
		return $info;
	}

	public function getInfoByCodeShort($code)
	{
		$info = $this->findOne(['code_short' => $code]);
		return $info;
	}

	public function getInfoByIP($returnDefault = true)
	{
		$info = $this->findOne(['code_short' => 'bj']);
		return $info;
	}
}
