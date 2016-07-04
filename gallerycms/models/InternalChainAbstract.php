<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
use Overtrue\Pinyin\Pinyin;

class InternalChainAbstract extends GallerycmsModel
{
	public $add_mul;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            ['name', 'unique', 'targetClass' => '\gallerycms\models\InternalChain', 'message' => 'This name has already been taken.'],
			['spell', 'default', 'value' => function($model, $attribute) {
                $spell = Pinyin::trans($model->name);
				return $spell;
			}],
			['url', 'url'],
			['add_mul', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'spell' => '拼音',
			'url' => '链接',
			'add_mul' => '批量添加',
        ];
    }

	public function addMul()
	{
		$datas = array_filter(explode("\n", $this->add_mul));
		foreach ($datas as $data) {
			$data = str_replace([' ', "\t"], ' ', $data);
			$info = explode(' ', $data);
			$name = isset($info[0]) ? $info[0] : '';
			$url = isset($info[1]) ? $info[1] : '';
			if (empty($name) || empty($url)) {
				continue;
			}
			$model = self::findOne(['name' => $name]);
			if ($model) {
				$model->url = $url;
			} else {
				$model = new self(['name' => $name, 'url' => $url]);
			}
			$model->save();
		}
		return true;
	}
}
