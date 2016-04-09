<?php
namespace passport\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class UserPlat extends ActiveRecord
{
    const STATUS_ACTIVE = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_plat}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
	
	public function bindPlatUser($user, $userPlat)
	{
		$userPlat['user_id'] = $user->id;

		$platFirstCode = $user->plat_first_code;
		if (empty($platFirstCode)) {
			$user->plat_first_code = $userPlat['plat_code'];
			$user->plat_first_time = time();
			$platId = 'plat_' . $userPlat['plat_code'];
			$user->$platId = $userPlat['openid'];
			$user->save();
		}

		$result = $userPlat->save();
		return $result;
	}

	public function checkBinded($user, $userPlat)
	{
		$where = [
			'user_id' => $user->id,
			'plat_code' => $userPlat->plat_code,
		];
		$bindInfo = $userPlat->findOne($where);

		return $bindInfo;
	}
}
