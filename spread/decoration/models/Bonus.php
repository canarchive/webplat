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
}
