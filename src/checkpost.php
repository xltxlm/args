<?php

namespace xltxlm\args;


/**
 * 检测post变量值，如果为null，那么抛出异常;
 */
class checkpost extends checkpost\checkpost_implements
{
    /**
     *
     */
    public function __invoke(): bool
    {
        foreach ($this->getkeys() as $getkey) {
            checkval(post($getkey), "post索引：$getkey");
        }
        return true;
    }

}
