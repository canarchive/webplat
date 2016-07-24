<?php

namespace paytrade\models;

class AccountUnusual extends Account
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%account_unusual}}';
    }
}
