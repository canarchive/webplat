<?php

namespace spread\groupon\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "goods".
 */
class Brand extends SpreadModel
{
	public $select;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%brand}}';
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
            [['name', 'category_id', 'logo', 'code'], 'required'],
			['code', 'unique', 'targetClass' => '\spread\groupon\models\Brand', 'message' => '代码已经被使用。'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'select' => '<h5>aa</h5>',
            'id' => '商品ID',
            'category_id' => '分类ID',
            'name' => '名称',
			'code' => '代码',
            'logo' => 'LOGO',
            'orderlist' => '排序',
            'description' => '商品描述',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '备货中',
			'1' => '正常',
			'99' => '手动下架',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['logo'];
		$this->_updateSingleAttachment('brand', $fields);

		return true;
	}	

	public function getCategoryInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Category::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getMerchantInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Merchant::find()->all(), 'id', 'name');
		return $infos;
	}

	public function checkBindGroupon($grouponId)
	{
		$bindInfo = GrouponBrand::findOne(['groupon_id' => $grouponId, 'brand_id' => $this->id]);

		return empty($bindInfo) ? false : true;
	}

	public function getInfos()
	{
		$model = new \merchant\models\Category();
		$categories = $model->getInfos();

		$infos = $this->find()->orderBy(['orderlist' => SORT_DESC])->all();
		$datas = [];
		foreach ($infos as $key => $info) {
			$info['logo'] = $info->getAttachmentUrl($info['logo']);
			$info = $info->toArray();
			$cId = $info['category_id'];
			if (!isset($datas[$cId])) {
				$datas[$cId]['name'] = isset($categories[$cId]) ? $categories[$cId]['name'] : '';
				$datas[$cId]['brief'] = isset($categories[$cId]) ? $categories[$cId]['brief'] : '';
			}
			$datas[$cId]['infos'][] = $info;
		}
		return $datas;
	}
}
