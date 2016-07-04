<?php

namespace spread\models;

use Yii;
use common\models\SpreadModel;

/**
 * This is the model class for table "template".
 */
class CustomService extends spreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%custom_service}}';
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

    public function rules()
    {
        return [
            [['name', 'mobile'], 'required'],
			[['status', 'serviced_num', 'serviced_times', 'distributed_at'], 'default', 'value' => 0],
			[['code', 'status'], 'safe'],
        ];
    }	

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'id' => '客服ID',
			'name' => '名字',
			'code' => '代码',
			'mobile' => '手机号',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'status' => '状态',

        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public static function getServiceInfo()
	{
        $orderBy = ['distributed_at' => SORT_ASC];
		$info = self::find()->where(['status' => 1])->orderBy($orderBy)->one();

		return $info;
	}

	public function updateServiceInfo()
	{
        $this->distributed_at = Yii::$app->params['currentTime'];
        $this->update();
        $this->updateCounters(['serviced_num' => 1]);
		
		return ;
	}
}
