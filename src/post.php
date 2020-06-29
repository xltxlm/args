<?php

namespace xltxlm\args;


use xltxlm\args\Request\Args;

/**
 * 从post数组中取数据。;
 */
class post extends post\post_implements
{

    public function __invoke()
    {
        $args = (new Args())
            ->setfromarray($_POST)
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