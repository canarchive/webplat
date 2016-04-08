<?php

namespace backend\components\rules;

/**
 * OtherRule Rule for check something
 */
class OtherRule extends \yii\rbac\Rule
{
    const RULE_NAME = 'other_rule';

    /**
     * @inheritdoc
     */
    public function execute($user, $item, $params)
    {
        return true;
    }
}
