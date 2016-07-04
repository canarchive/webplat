<?php

namespace gallerycms\models;

use yii\helpers\Url;
use common\models\GallerycmsModel;
use common\helpers\Tree;

class CategoryAbstract extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'catdir'], 'required'],
            [['parent_id'], 'filterParent'],
            [['orderlist', 'thumb', 'parent_id'], 'default', 'value' => 0],
            [['parent_id'], 'default', 'value' => ''],
			[['description', 'template', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '栏目ID',
            'name' => '名称',
            'catdir' => '目录',
            'thumb' => '缩略图',
            'parent_id' => '父栏目ID',
            'orderlist' => '排序',
            'description' => '描述',
            'template' => '模板',
            'meta_title' => 'SEO名称',
            'meta_keywords' => 'SEO关键字',
            'meta_description' => 'SEO描述',
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
	 * Get the infos, format the name to a tree
	 *
	 */
	public function getFormatedInfos()
	{
    	$infos = $this->find()->indexBy('id')->asArray()->all();
		$formatedInfos = $this->getTreeInfos($infos, 'id', 'parent_id', 'name');
        return $formatedInfos;
	}

	/**
	 * Get tree list for select
	 *
	 * @return array
	 */
	public function getSelectInfos()
	{
    	$infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'id', 'parent_id', 'name', 0);
		return $datas;
	}

	/**
	 * Get the islog
	 *
	 * @return array
	 */
	public function getTemplateInfos()
	{
		$datas = [
			'' => '默认',
			'simple' => '简洁',
		];	
		return $datas;
	}

	public function getDatas()
	{
        $infos = self::find()->where(['status' => 1])->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();

        foreach ($infos as $catId => & $info) {
            $info['url'] = url::to(['/site/list', 'code' => $info['catdir']]);
		}

		return $infos;
    }

	public function getLevelDatas()
	{
		$infos = $this->getDatas();
		$datas = [];
        foreach ($infos as $catId => & $info) {
            if (!isset($datas[$info['parent_id']])) {
                $datas[$info['parent_id']] = [];
            }
            $datas[$info['parent_id']][$catId] = $info;
        }

		return $datas;
	}
}
