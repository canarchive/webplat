<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\Company as CompanyModel;

class Company extends CompanyModel
{
    public function search($params)
    {
        $query = CompanyModel::find()
            ->from(CompanyModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
