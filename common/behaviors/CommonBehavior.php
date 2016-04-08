<?php

namespace common\behaviors;

use yii\base\Behavior;
//use website\models\Category;

class CommonBehavior extends Behavior
{
	public function getCategoryInfos()
	{
    	$infos = Category::find()->indexBy('id')->asArray()->all();
		return $infos;
	}
}
