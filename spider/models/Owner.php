<?php

namespace spider\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Owner extends MerchantModel
{
	public $companyInfo;
	public $aptitude;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner}}';
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
    }
}
