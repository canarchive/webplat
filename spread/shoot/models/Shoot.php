<?php

namespace spread\shoot\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "template".
 */
class shoot extends spreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['start_at', 'end_at'], 'filter', 'filter' => function($value) {
				return strtotime($value);
			}],
			[['picture', 'picture_small'], 'integer'],
			[['sms'], 'default', 'value' => ''],
			[['signup_base', 'description'], 'safe'],
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
			'start_at' => '开始时间',
			'end_at' => '结束时间',
			'picture' => '图片',
			'picture_small' => '小图',
			'description' => '描述',
			'signup_number' => '报名人数',
			'sms' => '通知短信',
			'status' => '状态',

        ];
    }

	public function getInfo($where)
	{
        $key = "shootsem_shoot_info_{$id}";
        $info = false;// \Yii::$app->cacheRedis->get($key);
        if ($info) {
            return $info;
		}

		$info = static::find()->where($where)->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	/**
	 * 格式化信息，m站和pc站需要格式化的信息不同
	 *
	 * @return array
	 */
	protected function _formatInfo($info)
	{
		$info['picture'] = $info->getAttachmentUrl($info['picture']);
		$info['picture_small'] = $info->getAttachmentUrl($info['picture_small']);

		return $info;
	}

	/**
	 * 获取图片的URL信息
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

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['picture', 'picture_small'];
		$attachment = new \spread\models\Attachment();
		$this->_updateSingleAttachment($attachment, 'shoot', $fields);

		return true;
	}	
}
