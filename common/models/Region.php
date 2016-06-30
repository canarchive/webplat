<?php

namespace common\models;

use Yii;
use common\helpers\Tree;
use common\models\PassportModel;

class Region extends PassportModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
			['code', 'unique', 'targetClass' => '\backend\models\Menu', 'message' => '代码已经被使用。'],
            [['parent_code'], 'filterParent'],
            [['orderlist'], 'default', 'value' => 0],
            [['parent_code'], 'default', 'value' => ''],
			[['description', 'orderlist', 'status'], 'safe'],
        ];
    }

    /**
     * Use to loop detected.
     */
    public function filterParent()
    {
        $parent = self::findOne(['code' => $this->parent_code]);
        if (empty($parent)) {
            $this->addError('parent_code', '父分类不存在');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id' => '地区ID',
            'name' => '名称',
            'parent_code' => '父级地区ID',
            'level' => '级别',
            'listorder' => '排序',
            'status' => '状态',			
        ];
    }

    /**
     * Get region parent
     * @return \yii\db\ActiveQuery
     */
    public function getRegionParent()
    {
        return $this->hasOne(Region::className(), ['code' => 'parent_code']);
    }

	/**
	 * Get the infos, format the name to a tree
	 *
	 */
	public function getFormatedInfos()
	{
    	$infos = $this->find()->indexBy('code')->asArray()->all();
		$formatedInfos = $this->getTreeInfos($infos, 'code', 'parent_code', 'name');
        return $formatedInfos;
	}

	/**
	 * Get tree list for select
	 *
	 * @return array
	 */
	public function getSelectInfos()
	{
		$datas = $this->getSubInfos('');
		$infos = [];
		foreach ($datas as $data) {
			foreach ($data['sub'] as $info) {
				$infos[$info['code']] = $info;
			}
			unset($data['sub']);
			$infos[$data['code']] = $data;
		}

		$datas = $this->getLevelInfos($infos, 'code', 'parent_code', 'name', '');
		return $datas;
	}

	/**
	 * Get the islog
	 *
	 * @return array
	 */
	public function getStatusInfos()
	{
		$datas = [
			'0' => '不显示',
			'1' => '显示',
		];	
		return $datas;
	}

	public function checkInfo($code, $level = 1)
	{
		$info = self::findOne(['code' => $code]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '指定地区不存在'];
		}

		/*if ($info->level < $level) {
			return ['status' => 400, 'message' => '请指定更精确的地区'];
		}*/

		return true;
	}

	public function getSubInfos($parentCode, $getSub = true)
	{
		$infos = $this->_subInfos($parentCode);
		if ($getSub) {
    		foreach ($infos as $key => & $info) {
    			$info['sub'] = $this->_subInfos($info['code']);
    		}
		}
		return $infos;
	}

	protected function _subInfos($parentCode)
	{
		$infos = self::find()->where(['parent_code' => $parentCode])->asArray()->all();
		return $infos;
	}

	public function getInfoByCode($code)
	{
		static $datas;
		if (isset($datas[$code])) {
			return $datas[$code];
		}

		$info = self::findOne(['code' => $code]);
		$datas[$code] = $info;

		return $info;
	}
}
