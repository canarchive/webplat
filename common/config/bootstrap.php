<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('website', dirname(dirname(__DIR__)) . '/website');
Yii::setAlias('passport', dirname(dirname(__DIR__)) . '/passport');
Yii::setAlias('paytrade', dirname(dirname(__DIR__)) . '/paytrade');
Yii::setAlias('restapp', dirname(dirname(__DIR__)) . '/restapp');
require_once(__DIR__ . '/bootstrap-local.php');
