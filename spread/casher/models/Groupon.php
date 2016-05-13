<?php

namespace spread\casher\models;

use common\models\GroupbuyModel;

/**
 * This is the model class for table "template".
 */
class Groupon extends GroupbuyModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sop_data_groupon';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'groupon_id' => '团购会ID',
			'company_id' => '所属公司',
			'groupon_name' => '名称',
			'groupon_diplay_date' => '时间',
			'template_cabinet' => '橱柜模板',
			'template_current' => '现有模板',
			'template_revision' => '改版',

        ];
    }

	public function getInfo($id, $isMobile = false)
	{
        $isMobile = intval($isMobile);
        $key = "grouponsem_groupon_info_{$id}_{$isMobile}";
        $info = false;// \Yii::$app->cacheRedis->get($key);
        if ($info) {
			$info['signup_number'] = $this->getSignupNumber($id);
            return $info;
        }

		$info = static::findOne(['groupon_id' => $id]);//->toArray();
		if (empty($info)) {
			return $info;
		}
                $info = $info->toArray();

		$info = $this->_formatInfo($info, $isMobile);
		$info['signup_number'] = $info['groupon_signup_base'] + $info['groupon_reg_number'];
        $info['next_groupon_id'] = 0;
		$time = time();
		if ($time > $info['groupon_date']) {
			$info['next_groupon_id'] = $this->getNextGroupon($info['company_id']);
		}

        \Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function getSignupNumber($id)
	{
		$info = static::findOne(['groupon_id' => $id])->toArray();
		$signupNumber = $info['groupon_signup_base'] + $info['groupon_reg_number'];
		return $signupNumber;
	}

	public function getInfosByCompanyId($companyId)
	{
        $time = strtotime("-5 months");
		$where = ['and', "groupon_date >= {$time}", "company_id={$companyId}"];
		$orderBy = ['groupon_id' => SORT_DESC];
		$infos = self::find()->where($where)->orderBy($orderBy)->asArray()->all();
		$data = [];
		foreach ($infos as $info) {
			$data[$info['groupon_id']] = $info['groupon_name'];
		}		
		return $data;
	}
}
