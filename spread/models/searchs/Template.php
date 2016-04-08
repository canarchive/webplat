<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\models\Template as TemplateModel;

class Template extends TemplateModel
{
    public function search($params)
    {
        $query = TemplateModel::find()
            ->from(TemplateModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
