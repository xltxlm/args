<?php

namespace xltxlm\args;


use xltxlm\args\Request\Args;

/**
 * 从cookie数组中取数据。;
 */
class cookie extends cookie\cookie_implements
{
    function __invoke()
    {
        $args = (new Args())
            ->setfromarray($_COOKIE)
            ->setkey($this->getkey());
        if ($this->gettype() != null) {
            $args
                ->settype($this->gettype());
        }
        if ($this->getdefault() != null) {
            $args
                ->setdefault($this->getdefault());
        }
        return $args
            ->__invoke();
    }
}
