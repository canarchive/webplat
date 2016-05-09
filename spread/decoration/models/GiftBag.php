<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class GiftBag extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gift_bag}}';
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
            [['name', 'sort'], 'required'],
            [['thumb', 'limit_mobile', 'orderlist', 'status', 'price'], 'default', 'value' => 0],
			[['description'], 'safe'],
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
            'thumb' => '图片',
            'sort' => '类别',
            'price' => '价格',
            'limit_mobile' => '每人限量',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getSortInfos()
	{
		$datas = [
			'update' => '品类升级',
			'acc' => '配饰礼包',
			'electric' => '电器礼包',
			'cooking' => '厨具礼包',
			'clean' => '保洁礼包',
			'check' => '检测礼包',
			'design' => '设计礼包',
			'individuation' => '个性化',
		];

		return $datas;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停使用',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$attachment = new \spread\models\Attachment();
		$this->_updateSingleAttachment($attachment, 'gift_bag', $fields);

		return true;
	}	

	public function getInfos($decorationId)
	{
		/*$cache = \Yii::$app->cache;
		$keyCache = 'decoration_brand';
		$data = $cache->get($keyCache);
		if ($data) {
			return $data;
		}*/

		$datas = $this->find()->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->all();

		$infos = DecorationGiftBag::find()->where(['decoration_id' => $decorationId])->orderBy(['orderlist' => SORT_DESC])->all();
		$returns = [];
		foreach ($infos as $info) {
			$id = $info['gift_bag_id'];
			if (isset($datas[$id])) {
			    $returns[$id] = $datas[$id];
			}
		}

        //$cache->set($keyCache, $infos);
		return $returns;
	}	

	public function getPresent($data)
	{
		$decoration = $data['decorationModel'];
		$countTarget = 100;//$decoration->gift_bag_number;
		if ($countTarget < 1) {
			return ['status' => 400, 'message' => '本次活动没有红包环节'];
		}

		$info = self::findOne($data['gift_bag_id']);
		if (empty($info)) {
			return ['status' => 400, 'message' => '红包信息有误'];
		}

		$got = GiftBagLog::findOne(['mobile' => $data['mobile'], 'decoration_id' => $decoration['id']]);
		if (!empty($got)) {
			//return ['status' => 400, 'message' => '您已经领过红包了'];
		}

		$countExist = GiftBagLog::find()->where(['decoration_id' => $decoration['id']])->count();
		if ($countExist >= $countTarget) {
			return ['status' => 400, 'message' => '本次活动红包已发放完毕'];
		}

		$got = GiftBagLog::findOne(['mobile' => $data['mobile'], 'decoration_id' => $decoration['id']]);
		if (!empty($got)) {
			//return ['status' => 400, 'message' => '您已经领过红包了'];
		}

		$insertInfo = [
			'gift_bag_id' => $info['id'],
			'decoration_id' => $decoration['id'],
			'mobile' => $data['mobile'],
			'name' => $info['name'],
			'price' => $info['price'],
			'created_at' => \Yii::$app->params['currentTime'],
			'status' => 0,
		];
		$giftBagLog = new GiftBagLog($insertInfo);
		$giftBagLog->insert(false);

		$return = [
			'status' => 200,
			'message' => "您成功领取了价值{$info['price']}的{$info['name']}红包",
			'data' => $info,
		];
		return $return;
	}
}
