<?php

namespace paytrade\models;

use common\models\PaytradeModel;
use website\models\Goods;

class Cart extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cart}}';
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '购物车ID',
            'goods_id' => '商品ID',
            'number' => '数量',
            'user_id' => '用户ID',
            'created_at' => '时间',
            'updated_at' => '最后添加时间',
            'ip' => 'IP地址',
            'is_delete' => '是否删除',
        ];
    }

	public function listInfo($params)
	{
		$condition = [
			'and',
			"user_id = {$params['userId']}",
			'is_delete = 0',
			'number > 0',
		];
		$model = new self();
        $infos = $model->find()->where($condition)->all();
		return $infos;
	}

	public function addInfo($params)
	{
		extract($params);
		if (empty($goodsId) || empty($number)) {
			return ['status' => 400, 'message' => 'param error'];
		}

		$goodsInfo = $this->checkGoods($goodsId, $number);
		if (!isset($goodsInfo['id'])) {
			return $goodsInfo;
		}

		$infoExist = self::findOne(['user_id' => $userId, 'goods_id' => $goodsId]);
        if (!$infoExist) {
            $data = [
				'user_id' => $userId,
                'goods_id' => $goodsId,
                'number' => $number,
                'ip' => \Yii::$app->request->getIP(),
            ];
            $cart = new Cart($data);
            $cart->save(false);
            return ['status' => 200, 'message' => 'OK'];
        }

        $infoExist->number = $infoExist->is_delete == 1 ? $number : $infoExist->number + $number;
		$infoExist->number = $infoExist->number > $goodsInfo->inventory ? $goodsInfo->inventory : $infoExist->number;
        $infoExist->operate_num = $infoExist->operate_num + 1;
        $infoExist->ip = \Yii::$app->request->getIP();
		$infoExist->is_delete = 0;
        $infoExist->update(false);
        return ['status' => 200, 'message' => 'OK'];
	}

	public function updateInfo($params)
	{
		$type = $params['type'];
		if (!in_array($type, ['add', 'minus'])) {
			return ['status' => 400, 'message' => 'params error'];
		}
		if ($params['number'] <= 0 || $params['number'] > 1000) {
			return ['status' => 400, 'message' => 'params error'];
		}

		$info = self::findOne(['id' => $params['id'], 'user_id' => $params['userId']]);
		if (empty($info) || $info->is_delete == 1) {
			return ['status' => 400, 'message' => '信息不存在'];
		}

		$goodsInfo = $this->checkGoods($info->goods_id);
		if (!isset($goodsInfo['id'])) {
			$info->is_delete = 1;
			$info->update();
			return $goodsInfo;
		}

		$info->number = $type == 'add' ? $info->number + $params['number'] : $info->number - $params['number'];
		$info->number = $info->number > $goodsInfo->inventory ? $goodsInfo->inventory : $info->number;
		$info->number = $info->number < 0 ? 0 : $info->number;
        $info->operate_num = $info->operate_num + 1;
        $info->ip = \Yii::$app->request->getIP();
        $info->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}

	public function deleteInfo($params)
	{
		$where = [
			'id' => $params['id'],
			'user_id' => $params['userId'],
		];

		return $this->_delete($where);
	}

	public function clearInfo($params)
	{
		$where = [
			'user_id' => $params['userId'],
		];

		return $this->_delete($where);
	}

	protected function _delete($where)
	{
		$data = [
			'is_delete' => 1,
			'ip' => \Yii::$app->request->getIP(),
		];

		$result = self::updateAll($data, $where);
		if ($result) {
			$data = [
			    'updated_at' => \Yii::$app->params['currentTime'],
			];
			self::updateAll($data, $where);
		}

		return ['status' => 200, 'message' => 'OK'];
	}

	protected function checkGoods($goodsId, $number = 0)
	{
		$info = Goods::getInfo($goodsId);
		if (empty($info)) {
			return ['status' => 400, 'message' => '商品不存在'];
		}

		if ($info->inventory < $number) {
	   	    return ['status' => 400, 'message' => '库存不足'];
		}

		return $info;
	}
}
