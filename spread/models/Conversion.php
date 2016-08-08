<?php

namespace spread\models;

class Conversion extends Visit
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%conversion}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
		$attributes = parent::attributeLabels();
        return array_merge($attributes, [
			'info_id' => '信息ID',
        ]);
    }

	public function insert($runValidation = true, $attributes = null)
	{
		return parent::insert($runValidation, $attributes);
    }	

	public static function getPositionInfos()
	{
		$datas = [
			'' => '未知',
			'top' => '顶部',
			'picture' => 'H5中部图片',
			'bottom' => '底部',
		];
		return $datas;
	}

	public function successLog($data)
	{
		$insertInfo = [
			'message' => $data['message'],
			'name' => $data['name'],
			'mobile' => $data['mobile'],
			'from_type' => $data['from_type'],
			'info_id' => $data['info_id'],
			'info_name' => $data['info_name'],
			'position' => $data['position'],
			'message' => $data['message'],
			'note' => $data['note'],
		];

		$session = \Yii::$app->session;
		$spreadInfo = isset($session['session_spread_info']) ? $session['session_spread_info'] : [];
		$spreadInfo = !empty($spreadInfo) && time() - $spreadInfo['time'] < 1800 ? $spreadInfo : [];
		
		if (isset($spreadInfo['time'])) {
			unset($spreadInfo['time']);
		}
		$insertInfo = array_merge($insertInfo, $spreadInfo);

		$conversion = new Conversion();
		$conversion->insert(false, $insertInfo);

		if (isset($insertInfo['keyword'])) {
		    $keywordModel = new \spread\models\Keyword();
		    $keywordModel->recordKeyword($insertInfo['keyword'], $insertInfo['from_type'], true);
		}

		return $insertInfo;
	}
}
