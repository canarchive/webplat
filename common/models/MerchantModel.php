<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use \merchant\models\Attachment;
use merchant\models\Merchant;

class MerchantModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }	

	protected function getAttachmentModel()
	{
		return new Attachment();
	}

	protected function getMerchantInfos()
	{
		$infos = ArrayHelper::map(Merchant::find()->all(), 'id', 'name');
		return $infos;
	}

	protected function getServiceInfos()
	{
		$infos = ArrayHelper::map(\spread\models\CustomService::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getHouseTypeInfos()
	{
		$datas = [
			'one' => '一居',
			'two' => '二居',
			'three' => '三居',
			'four' => '四居',
			'solo' => '小户型',
			'lodging' => '公寓',
			'double' => '复式',
			'villa' => '别墅',
		];

		return $datas;
	}

	public function getStyleInfos()
	{
		$datas = [
			'simple' => '简约',
			'modern' => '现代',
			'EN' => '欧式',
			'CN' => '中式',
			'rural' => '田园',
			'mediterranean' => '地中海',
			'US' => '美式',
			'mashup' => '混搭',
			'family' => '宜家',
			'simple-EN' => '简欧',
			'new-classics' => '新古典',
			'SE-asia' => '东南亚',
		];

		return $datas;
	}

	public function getDecorationTypeInfos()
	{
		$datas = [
			'all' => '全包',
			'half' => '半包',
		];
		return $datas;
	}

	public function getHouseSortInfos()
	{
		$datas = [
			'new' => '新房',
			'resold' => '二手房',
			'public' => '福利房',
			'office' => '办公室',
			'shop' => '商铺',
		];

		return $datas;
	}

	public function getRenovationStepInfos()
	{
		$datas = [
			'inspection' => '收房验房',
			'ready' => '前期准备',
			'purchase' => '采购阶段',
			'execution' => '硬装施工',
			'accept' => '验收阶段',
			'fitment' => '家具进场',
			'ornament' => '后期配饰',
			'finish' => '完工秀家',
			'perfect' => '后期改善',
		];

		return $datas;
	}

	public function getRenovationSortInfos()
	{
		$datas = [
			'rough' => '毛坯房',
			'part' => '局部翻新',
			'overall' => '整体翻新',
		];

		return $datas;
	}

	public function getRenovationBudgetInfos()
	{
		$datas = [
			'one' => '3万以下',
			'two' => '3-5万',
			'three' => '5-10万',
			'four' => '10-15万',
			'five' => '15-20万',
			'six' => '20万以上',
		];

		return $datas;
	}	
}
