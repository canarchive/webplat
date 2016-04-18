<?php

namespace spread\decoration\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "template".
 */
class Decoration extends spreadModel
{
	public $companyInfo;
	public $signupNumberFormat;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decoration}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            //[['orderlist'], 'default', 'value' => 0],
			[['start_at', 'end_at'], 'filter', 'filter' => function($value) {
				return strtotime($value);
			}],
			[['picture', 'picture_small', 'map'], 'integer'],
			[['company_id'], 'default', 'value' => 0],
			[['sms', 'sms_new'], 'default', 'value' => ''],
			[['address', 'signup_base', 'arrive_line', 'holding_at', 'description'], 'safe'],
        ];
    }	

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'id' => '团购会ID',
			'company_id' => '所属公司',
			'name' => '名称',
			'start_at' => '开始时间',
			'end_at' => '结束时间',
			'picture' => '图片',
			'picture_small' => '小图',
			'description' => '描述',
			'address' => '地址',
			'map' => '地图',
			'arrive_line' => '到达路线',
			'signup_base' => '基准报名人数',
			'signup_number' => '报名人数',
			'status' => '状态',

        ];
    }

	public function getInfo($where)
	{
        /*$key = "decorationsem_decoration_info_{$id}";
        $info = false;// \Yii::$app->cacheRedis->get($key);
        if ($info) {
			$info['signup_number'] = $this->getSignupNumber($id);
            return $info;
		}*/

		$info = static::find()->where($where)->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info['signup_number'] = $info['signup_base'] + $info['signup_number'];
		$info = $this->_formatInfo($info);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function getSignupNumber($id)
	{
		$info = static::findOne(['id' => $id])->toArray();
		$signupNumber = $info['signup_base'] + $info['signup_number'];
		return $signupNumber;
	}

	/**
	 * 格式化团购会信息，m站和pc站需要格式化的信息不同
	 *
	 * @return array
	 */
	protected function _formatInfo($info)
	{
		$info['picture'] = $info->getAttachmentUrl($info['picture']);
		$info['picture_small'] = $info->getAttachmentUrl($info['picture_small']);
		$info['map'] = $info->getAttachmentUrl($info['map']);
		$info['companyInfo'] = \merchant\models\Company::findOne($info['company_id'])->toArray();
		$signupNumber = (string) $info['signup_number']; 
		$signupNumberFormat = '';
		for ($i = 0; $i < strlen($signupNumber); $i++) {
			$signupNumberFormat .= '<i>' . $signupNumber{$i} . '</i>'; 
		}
		$info['signupNumberFormat'] = $signupNumberFormat;

		return $info;
	}

	/**
	 * 获取团购会相关图片的URL信息
	 *
	 * @return array
	 */
	protected function _getAttachmentPaths($info, $attachmentFields)
	{
		foreach ($attachmentFields as $field) {
			$aId = isset($info[$field]) ? $info[$field] : 0;
			$path = Attachments::getPath($aId);

			$info[$field] = $path;
		}

		return $info;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Company::find()->all(), 'id', 'name');
		return $infos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['picture', 'picture_small', 'map'];
		$attachment = new \spread\models\Attachment();
		$this->_updateSingleAttachment($attachment, 'decoration', $fields);

		return true;
	}	
}
