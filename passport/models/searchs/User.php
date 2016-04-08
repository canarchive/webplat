<?php

namespace passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use passport\models\User as ModelUser;

class User extends Model
{
    /**
     * @var string name of the rule
     */
    public $username;

    public function rules()
    {
        return [
            [['username'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => Yii::t('rbac-admin', 'Name'),
        ];
    }

    /**
     * Search BizRule
     * @param array $params
     * @return \yii\data\ActiveDataProvider|\yii\data\ArrayDataProvider
     */
    public function search($params)
    {
        $query = ModelUser::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
