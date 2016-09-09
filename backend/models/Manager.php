<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use common\models\AuthBase;

/**
 * This is the model class for table "manager".
 */
class Manager extends AuthBase
{
    const STATUS_NOACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_LOCK = 99;

	public $roles;
    public $password_new_repeat;
    public $oldpassword;
    public $password_new;

    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /*public function behaviors()
    {
		return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_time', 'last_time'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['last_time'],
                ],
            ],
        ];
	}*/

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auth_manager}}';
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return [
            'create' => ['username', 'email', 'password_new', 'password_new_repeat', 'status', 'auth_role', 'roles'],
            'update' => ['username', 'email', 'password_new', 'password_new_repeat', 'status', 'auth_role', 'roles'],
            'edit-info' => ['email', 'truename', 'mobile'],
            'edit-password' => ['oldpassword', 'password_new', 'password_new_repeat'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\backend\models\Manager', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

			[['oldpassword'], 'required'],
            [['oldpassword'], 'checkOldPassword', 'on' => ['edit-password']],
            ['password_new', 'required', 'on' => ['create', 'edit-password']],
            ['password_new', 'string', 'min' => 6, 'when' => function($model) { return $model->password_new != ''; }],
            ['password_new', 'compare', 'on' => ['edit-password']],
			[['truename', 'email', 'mobile', 'status', 'roles'], 'safe', 'on' => ['create', 'update']],
        ];
    }

    public function checkOldPassword()
    {
        $result = Yii::$app->security->validatePassword($this->oldpassword, $this->getOldAttribute('password'));
        if (!$result) {
            $this->addError('oldpassword', '旧密码错误');
        }
		if ($this->oldpassword == $this->password) {
            $this->addError('oldpassword', '新密码不能跟旧密码相同');
		}

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '管理员账号',
			'roles' => '角色',
            'truename' => '真实姓名',
			'login_num' => '登录次数',
            'password' => '密码',
            'oldpassword' => '旧密码',
            'password_new_repeat' => '确认密码',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'last_at' => '最后登录时间',
            'mobile' => '手机号',
            'email' => '邮箱',
            'status' => '状态',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->status = self::STATUS_NOACTIVE;
            }
			if (Yii::$app->controller->id == 'site') {
				return true;
			}
            if (!empty($this->password_new)) {
			$this->setPassword($this->password_new, 'password');
            }
            return true;
        }

        return false;
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		if (Yii::$app->controller->id == 'site' || in_array($this->scenario, ['edit-info', 'edit-password'])) {
			return true;
		}
		$id = $this->attributes['id'];
        $manager = Yii::$app->getAuthManager();
        $manager->revokeAll($this->id);
		foreach ((array) $this->roles as $roleName) {
			if (empty($roleName)) {
				continue;
			}
            $role = $manager->getRole($roleName);
            $manager->assign($role, $id);
		}

		return true;
	}

    public static function getStatusInfos()
    {
        return [
            self::STATUS_ACTIVE => '正常',
            self::STATUS_NOACTIVE => '没激活',
            self::STATUS_LOCK => '锁定',
        ];
    }

	public function getRoles()
	{
        $roles = \yii\helpers\ArrayHelper::getColumn(Yii::$app->getAuthManager()->getRolesByUser($this->id), 'name');
		return $roles;
	}

	public function getRoleInfos()
	{
        $manager = Yii::$app->getAuthManager();
		$roles = $manager->getRoles();
		
		return array_combine(array_keys($roles), array_keys($roles));
	}

	public function getInfos($where = [])
	{
		$infos = self::find()->all();

		return $infos;
	}

	public function getInfosByRoles($roles)
	{
		$ids = [];
		foreach ($roles as $role) {
            $idsTmp = Yii::$app->getAuthManager()->getUserIdsByRole($role);
			$ids = array_merge($ids, $idsTmp);
		}

		$infos = self::find()->where(['id' => $ids, 'status' => 1])->all();

		return $infos;
	}
}
