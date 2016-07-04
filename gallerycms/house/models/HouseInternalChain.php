<?php

namespace gallerycms\models;

class HouseInternalChain extends InternalChainAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_internal_chain}}';
    }
}
