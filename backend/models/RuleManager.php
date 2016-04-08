<?php

namespace backend\models;

use yii\rbac\Rule;
use Yii;

/**
 * RuleManager
 */
class RuleManager extends \yii\base\Model
{
    /**
     * @var string name of the rule
     */
    public $name;

    /**
     * @var integer UNIX timestamp representing the rule creation time
     */
    public $createdAt;

    /**
     * @var integer UNIX timestamp representing the rule updating time
     */
    public $updatedAt;

    /**
     * @var string Rule classname.
     */
    public $className;

    /**
     * @var Rule
     */
    private $_item;

    /**
     * Initilaize object
     * @param \yii\rbac\Rule $item
     * @param array $config
     */
    public function __construct($item, $config = [])
    {
        $this->_item = $item;
        if ($item !== null) {
            $this->name = $item->name;
            $this->updatedAt = $item->updatedAt;
            $this->createdAt = $item->createdAt;
            $this->className = $this->getRuleClasses(get_class($item));
        }
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'className'], 'required'],
            ['name', 'checkNameUnique'],
            [['className'], 'string'],
            [['className'], 'classExists']
        ];
    }

    /**
     * Validate class exists
     */
    public function classExists()
    {
        if (!class_exists($this->className) || !is_subclass_of($this->className, Rule::className())) {
            $this->addError('className', "Unknown Class: {$this->className}");
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => '名称',
            'className' => '类名',
            'createdAt' => '创建时间',
            'updatedAt' => '更新时间',
        ];
    }

    /**
     * Check if new record.
     * @return boolean
     */
    public function getIsNewRecord()
    {
        return $this->_item === null;
    }

    /**
     * Find model by id
     * @param type $id
     * @return null|static
     */
    public static function find($id)
    {
        $item = Yii::$app->authManager->getRule($id);
        if ($item !== null) {
            return new static($item);
        }

        return null;
    }

    /**
     * Save model to authManager
     * @return boolean
     */
    public function save()
    {
        if ($this->validate()) {
            $manager = Yii::$app->authManager;
            $class = $this->className;
            if ($this->_item === null) {
                $isNew = true;
            } else {
                $isNew = false;
                $oldName = $this->_item->name;
            }
            $this->_item = new $class();
            $this->_item->name = $this->name;

            if ($isNew) {
                $manager->add($this->_item);
            } else {
                $manager->update($oldName, $this->_item);
            }

            return true;
        }
        return false;
    }

    /**
     * Get item
     * @return Item
     */
    public function getItem()
    {
        return $this->_item;
    }

	/**
	 * Get the rule classes
	 *
	 * @return array
	 */
	public function getRuleClasses($data = null)
	{
		$datas = [
			'backend\components\rules\RouteRule' => '路由规则',
			'backend\components\rules\OtherRule' => '其他规则',
		];

		$return = $datas;
		if ($data !== null) {
			$return = isset($datas[$data]) ? $datas[$data] : '';
		}

		return $return;
	}

	public function checkNameUnique()
	{
		if (!$this->isNewRecord && ($this->_item->name == $this->name)) {
			return true;
		}

        $item = Yii::$app->authManager->getRule($this->name);
        if ($item !== null) {
			$this->addError('name', '规则名称"' . $this->name . '"已存在');
			return false;
        }

		return true;
	}
}
