<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('spread', dirname(dirname(__DIR__)) . '/spread');
Yii::setAlias('merchant', dirname(dirname(__DIR__)) . '/merchant');
require_once(__DIR__ . '/bootstrap-local.php');
