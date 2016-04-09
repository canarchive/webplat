<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('gallerycms', dirname(dirname(__DIR__)) . '/gallerycms');
Yii::setAlias('passport', dirname(dirname(__DIR__)) . '/passport');
require_once(__DIR__ . '/bootstrap-local.php');
