<?php

namespace xltxlm\args;


use xltxlm\args\Request\Args;

/**
 * 从get数组中取数据。;
 */
class get extends get\get_implements
{
    /**
     *
     */
    public function __invoke()
    {
        $args = (new Args())
            ->setfromarray($_GET)
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
