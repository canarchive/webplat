<?php

namespace backend\models;

use Yii;
use backend\components\Configs;
use common\models\PassportModel;
use common\helpers\Tree;

/**
 * This is the model class for table "menu".
 */
class Menu extends PassportModel
{
    //public $parent_code;
	public $url;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auth_menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
			['code', 'unique', 'targetClass' => '\backend\models\Menu', 'message' => '代码已经被使用。'],
            [['name'], 'required'],
            [['parent_code'], 'filterParent'],
			[['module', 'controller', 'method', 'islog', 'display', 'extparam'], 'safe'],
            [['orderlist'], 'default', 'value' => 0],
        ];
    }

    /**
     * Use to loop detected.
     */
    public function filterParent()
    {
        $value = $this->parent_code;
        $parent = self::findOne(['code' => $value]);
        if (empty($parent)) {
            $this->addError('parent_code', '父菜单不存在');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '菜单ID',
            'code' => '代码',
            'parent_code' => '父菜单',
            'name' => '名称',
            'module' => '模块',
            'controller' => '控制器',
            'method' => '方法',
            'orderlist' => '排序',
            'islog' => '是否记录日志',
            'display' => '显示位置',
            'extparam' => '附加参数',
        ];
    }

    /**
     * Get menu parent
     * @return \yii\db\ActiveQuery
     */
    public function getMenuParent()
    {
        return $this->hasOne(Menu::className(), ['code' => 'parent_code']);
    }

	/**
	 * Get the infos, format the name to a tree
	 *
	 */
	public function getFormatedInfos()
	{
    	$infos = $this->find()->indexBy('code')->asArray()->all();
		foreach ($infos as $code => $info) {
			$parentId = isset($infos[$info['parent_code']]['id']) ? $infos[$info['parent_code']]['id'] : 0;
			$parentNode = $parentId ? 'child-of-node-' . $parentId : '';
			$info['parentNode'] = $parentNode;
			$level = $this->getLevel($code, $infos, 'parent_code');
			$info['level'] = $level;
			$infos[$code] = $info;
		}

        $menuTree = new Tree($infos, 'code', 'parent_code', 'name');
        $formatedInfos = $menuTree->getTree('');

        return $formatedInfos;
	}

	/**
	 * Get tree list for select
	 *
	 * @return array
	 */
	public function getSelectInfos()
	{
    	$infos = $this->find()->select(['code', 'name', 'parent_code'])->indexBy('code')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'code', 'parent_code', 'name', '');
		return $datas;
	}

	/**
	 * Get the module
	 *
	 * @return array
	 */
	public function getModuleInfos($data = null)
	{
		$datas = [
			'' => '后台基本模块',
			'passport' => '用户模块',
			'website' => '店铺模块',
			'paytrade' => '充值交易模块',
			'groupbuy' => '团购模块',
			'pay' => '交易模块',
			'spread' => '推广和统计',
			'merchant' => '商家',
		];

		$return = $datas;
		if ($data !== null) {
			$return = isset($datas[$data]) ? $datas[$data] : '';
		}

		return $return;
	}

	/**
	 * Get the islog
	 *
	 * @return array
	 */
	public function getIslogInfos()
	{
		$datas = [
			'0' => '不记录',
			'1' => '记录',
		];	
		return $datas;
	}

	/**
	 * Get the display
	 *
	 * @return array
	 */
	public function getDisplayInfos()
	{
		$datas = [
			'1' => '顶部',
			'2' => '左侧',
			'3' => '右侧顶部',
			'4' => '基于记录',
		];	
		return $datas;
	}	

	public function beforeUpdate()
	{
        parent::beforeSave($insert);
		$code = $this->oldAttributes['code'];
		$this->removePermission($code);

		return true;
	}		

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);
		$code = $this->attributes['code'];
        $manager = \Yii::$app->getAuthManager();
		$permission = $manager->getPermission($code);
		if ($permission) {
			return true;
		}
		
		$permission = $manager->createPermission($code);
		$manager->add($permission);

		return true;
	}	

	public function afterDelete()
	{
        parent::afterDelete();
		$code = $this->attributes['code'];

		$this->removePermission($code);
	}

	protected function removePermission($code)
	{
        $manager = \Yii::$app->getAuthManager();
		$permission = $manager->getPermission($code);
		if ($permission) {
		    $manager->remove($permission);
		}

		return ;
	}
}
