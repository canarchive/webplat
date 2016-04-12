<?php

namespace spread\models;

use common\models\SpreadModel;
use Overtrue\Pinyin\Pinyin;

class Tag extends SpreadModel
{
	public $add_mul;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'unique', 'targetClass' => '\spread\models\Tag', 'message' => 'This name has already been taken.'],
			['spell', 'default', 'value' => function($model, $attribute) {
                $spell = Pinyin::trans($model->name);
				return $spell;
			}],
			[['orderlist'], 'default', 'value' => 0],
			[['add_mul'], 'safe'],
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
