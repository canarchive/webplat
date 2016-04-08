<?php

namespace restapp\tool\models;

use yii\base\Event;

/**
 * Class ResponseEvent
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class ResponseEvent extends Event
{
    /**
     * @var RequestForm
     */
    public $form;
    /**
     * @var ResponseRecord
     */
    public $record;
}
