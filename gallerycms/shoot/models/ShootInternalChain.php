<?php

namespace gallerycms\models;

class ShootInternalChain extends InternalChainAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_internal_chain}}';
    }
}
