<?php

namespace xltxlm\args;


/**
 * 检查值是否存在为null，如果是，抛出异常;
 */
class checkval extends checkval\checkval_implements
{
    /**
     *
     */
    public function __invoke(): bool
    {
        if ($this->getval() === null) {
            throw new \Exception("值为null：{$this->getmessage()}");
        }
        return true;
    }

}
