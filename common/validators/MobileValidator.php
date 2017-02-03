<?php

namespace common\validators;

use Yii;
use yii\base\InvalidConfigException;
use yii\web\JsExpression;
use yii\helpers\Json;
use yii\validators\Validator;

class MobileValidator extends Validator
{
    public $pattern = '/1[34578]{1}\d{9}$/';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if ($this->message === null) {
            $this->message = Yii::t('yii', '{attribute} is not a valid phone.');
        }
    }

    /**
     * @inheritdoc
     */
    protected function validateValue($value)
    {
		$valid = strlen($value) != 11 ? false : preg_match($this->pattern, $value);

        return $valid ? null : [$this->message, []];
    }
}
