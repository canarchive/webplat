<?php
class Model
{
    public function getCategoryParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

	public function commonOpe()
	{
		$sortInfos = IndexSort::find()->where(['status' => 1])->orderBy(['orderlist' => SORT_DESC])->indexBy('id')->asArray()->all();
		$infos = self::find()->where(['category_id' => array_keys($sortInfos)])->orderBy(['orderlist' => SORT_DESC])->all();
	}

	public function getInfosByCategoryId($categoryId)
	{
		if (empty($categoryId)) {
			return [];
		}

		$categoryModel = new \website\models\Category;
		$categoryInfo = $categoryModel->findOne(['id' => $categoryId]);
		if (empty($categoryInfo)) {
			return [];
		}
		$categoryIds = [$categoryId];

		$parentId = $categoryInfo['parent_id'];
		for (; $parentId > 0; ) {
		    $categoryInfo = $categoryModel->findOne(['id' => $parentId]);
			$parentId = empty($categoryInfo) ? 0 : $categoryInfo['parent_id'];
			$categoryIds[] = $categoryInfo['id'];
		}

		$categoryBrandModel = new \website\models\CategoryBrand;
		$infos = $categoryBrandModel->find()->where(['category_id' => $categoryIds])->indexBy('brand_code')->asArray()->all();

		$brandModel = new \website\models\Brand;
		$datas = $brandModel->find()->where(['code' => array_keys($infos)])->asArray()->all();
        $datas = ArrayHelper::map($datas, 'code', 'name');

		return $datas;
	}

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
