<?php
namespace passport\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use common\models\AuthBase;

class User extends AuthBase
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            //TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'username' => '用户登陆名',
            'email' => '用户邮箱',
            'mobile' => '手机号码',
            'nickname' => '昵称',
            'auth_key' => 'auth_key',
            'password' => '用户密码',
            'password_reset_token' => 'password_reset_token',
            'sex' => '用户性别',
            'birthday' => '用户生日',
            'region_id' => '地区ID',
            'profile' => '个人简介',
            'plat_first_code' => '首次第三方代码',
            'plat_first_time' => '首次绑定时间',
            'plat_weibo' => '微博ID',
            'plat_wechat' => '微信ID',
            'plat_douban' => '豆瓣ID',
            'plat_qq' => 'QQ-ID',
            'is_validated' => '是否激活',
            'register_from' => '用户注册类型：0，僵尸用户；1：普通注册；2,ipad注册；3，iphone注册；4,android注册；5,其他',
            'login_number' => '登陆次数',
            'last_time' => '最后登录时间',
            'last_ip' => '上次登陆IP',
            'register_time' => '注册时间',
            'register_ip' => '注册IP',
            'status' => '用户状态：1-正常；99-锁定',
        ];
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);//, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by mobile
     *
     * @param string $mobile
     * @return static|null
     */
    public static function findByMobile($mobile)
    {
        return static::findOne(['mobile' => $mobile]);//, 'status' => self::STATUS_ACTIVE]);
    }

	public function getRegisterFromInfos()
	{
		$datas = [
			'default' => '站内',
		];

		return $datas;
	}

    public function fields()
    {
        $fields = parent::fields();

        // remove fields that contain sensitive information
        unset($fields['auth_key'], $fields['password'], $fields['password_reset_token']);
        return $fields;
    }

	public function registerUser($data)
	{
        $user = new self($data);
		$user->created_at = \Yii::$app->params['currentTime'];
		$user->updated_at = \Yii::$app->params['currentTime'];
        $user->setPassword($data['password']);
        $user->generateAuthKey();
        if ($user->save()) {
            return $user;
        }		

		return false;
	}

	public function getGenderInfos()
	{
		return \Yii::$app->params['genderInfos'];
	}

	public function settingInfo($data)
	{
		$this->birthday = implode('-', [$data['year'], $data['month'], $data['day']]);
		$this->nickname = $data['nickname'];
		$this->gender = $data['gender'];
		return $this->update(false, $data);
	}
}
