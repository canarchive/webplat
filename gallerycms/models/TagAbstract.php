<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
use Overtrue\Pinyin\Pinyin;

class TagAbstract extends GallerycmsModel
{
	public $add_mul;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'unique', 'targetClass' => '\gallerycms\models\Tag', 'message' => 'This name has already been taken.'],
			['spell', 'default', 'value' => function($model, $attribute) {
                $spell = Pinyin::trans($model->name);
				return $spell;
			}],
			[['orderlist'], 'default', 'value' => 0],
			[['add_mul', 'seo_title', 'seo_keyword', 'seo_description'], 'safe'],
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
            'parent_id' => '父栏目ID',
            'orderlist' => '排序',
            'meta_title' => 'SEO名称',
            'meta_keywords' => 'SEO关键字',
            'meta_description' => 'SEO描述',
			'add_mul' => '批量添加(格式：标签 排序\n)',
        ];
    }

	public function addMul()
	{
		$datas = array_filter(explode("\n", $this->add_mul));
		foreach ($datas as $data) {
			$data = str_replace([' ', "\t"], ' ', $data);
			$info = explode(' ', $data);
			$name = isset($info[0]) ? trim($info[0]) : '';
			$orderlist = isset($info[1]) ? intval($info[1]) : '';
			if (empty($name)) {
				continue;
			}
			$model = self::findOne(['name' => $name]);
			if ($model) {
				$model->orderlist = $orderlist;
			} else {
			    $model = new self(['name' => $name]);
			}
			$model->save();
		}
		return true;
	}	
}
