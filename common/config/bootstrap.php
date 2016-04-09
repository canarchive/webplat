<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('passport', dirname(dirname(__DIR__)) . '/passport');
require_once(__DIR__ . '/bootstrap-local.php');
