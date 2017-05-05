<?php

namespace gallerycms\house\models;

use gallerycms\models\PositionAbstract;

class HousePosition extends PositionAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_position}}';
    }

	public function getTypeInfos()
	{
		$datas = [
			'pc_index_slice' => 'PC-首页-幻灯',
			'mobile_index_slice' => '移动端-首页-幻灯',
		];
		return $datas;
	}
}
