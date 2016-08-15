<?php

namespace website\models;

use Yii;
use common\models\WebsiteModel;

class GoodsComment extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'goods_id', 'content'], 'required'],
			[['created_at'], 'default', 'value' => Yii::$app->params['currentTime']],
			[['ip'], 'default', 'value' => function($model, $attribute) {
		        $ip = \Yii::$app->request->getIP();
				return $ip;
			}],
			[['city'], 'default', 'value' => function($model, $attribute) {
		        $city = \common\components\IP::find($model->ip);
		        $city = is_array($city) ? implode('-', $city) : $city;
				return $city;
			}],
			[['status'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'user_id' => '用户ID',
            'goods_id' => '商品ID',
            'goods_sku_id' => 'SKU-ID',
            'order_id' => '订单ID',
            'star' => '级别',
            'content' => '内容',
            'status' => '状态',
            'created_at' => '评论时间',
        ];
    }
}
