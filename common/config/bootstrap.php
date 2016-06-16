<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('gallerycms', dirname(dirname(__DIR__)) . '/gallerycms');
Yii::setAlias('passport', dirname(dirname(__DIR__)) . '/passport');
Yii::setAlias('shoot', dirname(dirname(__DIR__)) . '/shoot');
Yii::setAlias('spider', dirname(dirname(__DIR__)) . '/spider');
Yii::setAlias('spread', dirname(dirname(__DIR__)) . '/spread');
Yii::setAlias('paytrade', dirname(dirname(__DIR__)) . '/paytrade');
require_once(__DIR__ . '/bootstrap-local.php');
