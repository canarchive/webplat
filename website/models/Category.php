<?php

namespace website\models;

use Yii;
use common\helpers\Tree;
use common\models\WebsiteModel;
use yii\helpers\ArrayHelper;

class Category extends WebsiteModel
{
	public $brand_code;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_id'], 'filterParent'],
            [['parent_id', 'orderlist'], 'default', 'value' => 0],
			[['description', 'orderlist', 'status', 'brand_code'], 'safe'],
        ];
    }

    /**
     * Use to loop detected.
     */
    public function filterParent()
    {
        $parent = self::findOne(['id' => $this->parent_id]);
        if (empty($parent)) {
            $this->addError('parent_id', '父分类不存在');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => '名称',
            'description' => '描述',
            'parent_id' => '父级分类ID',
            'orderlist' => '排序',
            'status' => '状态',
        ];
    }

    /**
     * Get category parent
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

	/**
	 * Get the infos, format the name to a tree
	 *
	 */
	public function getFormatedInfos()
	{
    	$infos = $this->find()->indexBy('id')->asArray()->all();
		foreach ($infos as $id => $info) {
			$parentId = $info['parent_id'];
			$parentNode = $parentId ? 'child-of-node-' . $parentId : '';
			$info['parentNode'] = $parentNode;
			$infos[$id] = $info;
		}

        $categoryTree = new Tree($infos, 'id', 'parent_id', 'name');
        $formatedInfos = $categoryTree->getTree(0);

        return $formatedInfos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$id = $this->attributes['id'];
		$categoryBrand = new CategoryBrand();
		$categoryBrand->deleteAll("category_id = {$id}");
		$this->brand_code;
		foreach ((array) $this->brand_code as $code) {
			$data = ['category_id' => $id, 'brand_code' => $code];
			$categoryBrand->category_id = $id;
			$categoryBrand->brand_code = $code;
			$categoryBrand->insert($data);
		}

		return true;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function getSelectInfos()
	{
    	$infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'id', 'parent_id', 'name');
		return $datas;
	}

	public function getBrandCode()
	{
		$categoryBrand = new CategoryBrand();
		$infos = $categoryBrand->find()->where(['category_id' => $this->id])->indexBy('brand_code')->asArray()->all();
		//print_r($infos);exit();
		return array_keys($infos);
	}

	public function getBrandInfos()
	{
		$infos = ArrayHelper::map(Brand::find()->all(), 'code', 'name');
		return $infos;
	}

	public function getInfo($id)
	{
		$info = self::findOne($id);
		if (empty($info)) {
			return [];
		}

    	$infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$tree = new Tree($infos, 'id', 'parent_id', 'name');
        $infosSub = $tree->getChildren($id);
		$infosParent = $tree->getParent($id, true);

		$datas = [
			'info' => $info->toArray(),
			'infosSub' => $infosSub,
			'infosParent' => $infosParent,
		];

		return $datas;
	}
}
