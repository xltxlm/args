<?php

namespace xltxlm\args;


/**
 * checkval的多值数组检测版本;
 */
class checkvals extends checkvals\checkvals_implements
{
    /**
     *
     */
    public function __invoke(): bool
    {
        foreach ($this->getvals() as $key => $getval) {
            checkval($getval);
        }
        return true;
    }

}
