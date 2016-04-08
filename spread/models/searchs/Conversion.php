<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use spread\models\Conversion as ConversionModel;

class Conversion extends ConversionModel
{
	public $company_id;
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['keyword', 'groupon_id', 'created_at_start', 'created_at_end', 'template_code', 'from_type', 'channel'], 'safe'],
        ];
    }
    public function search($params)
    {
        $query = ConversionModel::find()->orderBy('id DESC');

		return $this->_search($params, $query);
	}
}
