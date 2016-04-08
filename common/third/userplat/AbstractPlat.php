<?php

namespace common\third\userplat;

abstract class AbstractPlat
{
    abstract function bind();

    abstract function backAuth();

    abstract function getPlatUser();

}
