<?php

namespace passport\models;

use common\models\Region;
use common\models\PassportModel;

class UserAddress extends PassportModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_address}}';
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
			['user_id', 'checkNum'],
            [['user_id', 'region_code', 'address', 'mobile', 'consignee'], 'required'],
			['region_code', 'checkRegionCode'],
            ['mobile', 'common\validators\MobileValidator'],
			[['is_default'], 'default', 'value' => 0],
			[['sign_building', 'best_time', 'address', 'consignee'], 'filter', 'filter' => 'strip_tags'],
        ];
    }

	public function checkNum()
	{
		$count = self::find()->where(['user_id' => $this->user_id])->count();
		if ($count > 100) {
            $this->addError('user_id', '个人收货地址不能多于100个');
		}

		return false;
	}

	public function checkRegionCode()
	{
		$regionModel = new Region();
		$checkRegion = $regionModel->checkInfo($this->region_code);
		if ($checkRegion !== true) {
            $this->addError('region_code', '请选择正确的地区');
		}

		return false;
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'name',
            'user_id' => 'user_id',
            'consignee' => 'consignee',
			'region_code' => '地区',
            'address' => '详细地址',
            'zipcode' => '邮编',
            'mobile' => '手机号',
            'sign_building' => '标志性建筑',
            'best_time' => '最佳时间',
            'created_at' => '创建时间',
            'updated_at' => '最后更新时间',
			'is_default' => '默认地址',
        ];
    }

	public function getBestTimeInfos()
	{
		$datas = [
			'weekend' => '周末全天',
			'anyday' => '随时',
			'workday' => '工作日',
			'09_15' => '早上8点-下午3点',
		];
		return $datas;
	}

	public function beforeSave($insert)
	{
        parent::beforeSave($insert);

        if (parent::beforeSave($insert) && $this->is_default) {
		     self::updateAll(['is_default' => 0], ['user_id' => $this->user_id]);
		}
		return true;
	}

	public function listInfo($params)
	{
		$condition = [
			'and',
			"user_id = {$params['user_id']}",
		];
		$model = new self();
        $infos = $model->find()->where($condition)->all();
		return $infos;
	}

	public function addInfo($params)
	{
		$check = $this->_checkParam($params);
		if ($check !== true) {
			return $check;
		}

		$infos = self::find()->where(['user_id' => $params['user_id']])->all();
		if (count($infos) >= 20) {
			return ['status' => 400, 'message' => '您不能添加20条以上的地址信息'];
		}

        $model = new self($params);
        $model->save(false);
        return ['status' => 200, 'message' => 'OK'];
	}

	public function updateInfo($params)
	{
		$check = $this->_checkParam($params);
		if ($check !== true) {
			return $check;
		}

		$info = self::findOne(['id' => $params['id'], 'user_id' => $params['user_id']]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '信息不存在'];
		}
		foreach ($params as $field => $value) {
			$info->$field = $value;
		}
		$info->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}

	public function deleteInfo($params)
	{
		$info = self::findOne(['id' => $params['id'], 'user_id' => $params['user_id']]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '信息不存在'];
		}
		$info->delete();

		return ['status' => 200, 'message' => 'OK'];
	}

	protected function _checkParam($params)
	{
		$needFields = ['region_code', 'consignee', 'address', 'mobile'];
		foreach ($needFields as $field) {
			if (empty($params[$field])) {
			    return ['status' => 400, 'message' => "{$field} is need!"];
			}
		}

		$regionModel = new Region();
		$checkRegion = $regionModel->checkInfo($params['region_code']);
		if (isset($checkRegion['status'])) {
			return $checkRegion;
		}

		if ($params['is_default']) {
			self::updateAll(['is_default' => 0], ['user_id' => $params['user_id']]);
		}

		return true;
	}
}
