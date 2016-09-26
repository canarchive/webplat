<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class OwnerHouse extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner_house}}';
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
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '房屋信息ID',
            'owner_id' => '业主ID',
            'mobile' => '手机号',
			'address' => '小区',
            'house_type' => '户型',
            'house_sort' => '房屋类别',
            'house_area' => '房屋面积',
            'created_at' => '注册时间',
            'updated_at' => '更新时间',
            'decoration_id' => '团购会ID',
            'renovation_at' => '装修时间',
            'renovation_step' => '装修阶段',
            'renovation_budget' => '预算',
            'renovation_need_company' => '是否想找装修公司',
            'buy_furniture' => '是否想买家具',
            'buy_building_materials' => '是否想买建材',
        ];
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

	public function getRenovationCompanyInfos()
	{
		$datas = [
			'0' => '不需要',
			'1' => '需要',
		];

		return $datas;
	}

	public function getBuyFurnitureInfos()
	{
		$datas = [
			'0' => '不需要',
			'1' => '需要',
		];

		return $datas;
	}

	public function getBuyBuildingInfos()
	{
		$datas = [
			'0' => '不需要',
			'1' => '需要',
		];

		return $datas;
	}
}
