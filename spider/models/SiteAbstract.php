<?php

namespace spider\models;

use common\models\SpiderModel;

class SiteAbstract extends SpiderModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['status'], 'default', 'value' => 0],
			[['url_mobile', 'description'], 'safe'],
        ];
    }

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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'url' => '站点URL',
            'url_mobile' => '手机端URL',
            'description' => '描述',
			'status' => '状态',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停',
			'1' => '正常',
		];
		return $datas;
	}

	public function spider($action)
	{
		$object = $this->getSpiderObject('Spider');
		$method = $action;
		return $object->$method($this->code);
	}

	public function deal($action)
	{
		$object = $this->getSpiderObject('Deal');
		$method = $action;
		return $object->$method($this->code);
	}

	protected function getSpiderObject($type)
	{
		$code = $this->code;
		$class = 'spider\house\models\\' . ucfirst($code) . $type;
		$object = new $class();

		return $object;
	}
}
