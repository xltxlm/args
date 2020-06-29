<?php

namespace xltxlm\args;


/**
 * 检测get变量值，如果为null，那么抛出异常;
 */
class checkget extends checkget\checkget_implements
{
    /**
     *
     */
    public function __invoke(): bool
    {
        foreach ($this->getkeys() as $getkey) {
            checkval(get($getkey), "get索引：$getkey");
        }
        return true;
    }

}
