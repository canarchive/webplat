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

    public function attributeLabels()
    {
		$attributes = parent::attributeLabels();
		return $attributes;
    }

	public function insert($runValidation = true, $attributes = null)
	{
		return parent::insert($runValidation, $attributes);
    }	

	public function successLog($data)
	{
		$session = \Yii::$app->session;
		$spreadInfo = isset($session['session_spread_info']) ? $session['session_spread_info'] : [];
		$spreadInfo = !empty($spreadInfo) && time() - $spreadInfo['time'] < 1800 ? $spreadInfo : [];
		
		if (isset($spreadInfo['time'])) {
			unset($spreadInfo['time']);
		}
		$insertInfo = array_merge($data, $spreadInfo);

		$conversion = new Conversion();
		$newData = $conversion->insert(false, $insertInfo);
		//$this->statisticRecord($newData, 'signup');

		return $insertInfo;
	}
}
