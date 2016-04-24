<?php

namespace spread\decoration\models;

use yii\helpers\ArrayHelper;
use common\models\SpreadModel;

class Bonus extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bonus}}';
    }

    /**
     * @inheritdoc
     */
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
    public function rules()
    {
        return [
            [['name', 'decoration_id'], 'required'],
            [['limit_day', 'orderlist', 'status', 'price'], 'default', 'value' => 0],
			[['description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '品牌ID',
            'name' => '名称',
            'price' => '金额',
            'limit_day' => '每日限量',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停使用',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function getDecorationInfos()
	{
		$infos = ArrayHelper::map(\spread\decoration\models\Decoration::find()->all(), 'id', 'name');
		return $infos;
	}	

	public function getInfos($decorationId)
	{
		/*$cache = \Yii::$app->cache;
		$keyCache = 'decoration_brand';
		$data = $cache->get($keyCache);
		if ($data) {
			return $data;
		}*/

		$infos = $this->find()->where(['decoration_id' => $decorationId])->orderBy(['orderlist' => SORT_DESC])->all();

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getPresent($data)
	{
		$decoration = $data['decorationModel'];
		$countTarget = 100;//$decoration->bonus_number;
		if ($countTarget < 1) {
			return ['status' => 400, 'message' => '本次活动没有红包环节'];
		}

		$info = self::findOne($data['bonus_id']);
		if (empty($info)) {
			return ['status' => 400, 'message' => '红包信息有误'];
		}

		$got = BonusLog::findOne(['mobile' => $data['mobile'], 'decoration_id' => $decoration['id']]);
		if (!empty($got)) {
			//return ['status' => 400, 'message' => '您已经领过红包了'];
		}

		$countExist = BonusLog::find()->where(['decoration_id' => $decoration['id']])->count();
		if ($countExist >= $countTarget) {
			return ['status' => 400, 'message' => '本次活动红包已发放完毕'];
		}

		$got = BonusLog::findOne(['mobile' => $data['mobile'], 'decoration_id' => $decoration['id']]);
		if (!empty($got)) {
			//return ['status' => 400, 'message' => '您已经领过红包了'];
		}

		$insertInfo = [
			'bonus_id' => $info['id'],
			'decoration_id' => $decoration['id'],
			'mobile' => $data['mobile'],
			'name' => $info['name'],
			'price' => $info['price'],
			'created_at' => \Yii::$app->params['currentTime'],
			'status' => 0,
		];
		$bonusLog = new BonusLog($insertInfo);
		$bonusLog->insert(false);

		$return = [
			'status' => 200,
			'message' => "您成功领取了价值{$info['price']}的{$info['name']}红包",
			'data' => $info,
		];
		return $return;
	}
}
