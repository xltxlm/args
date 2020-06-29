<?php
namespace xltxlm\args\checkget;


/**
 * 检测get变量值，如果为null，那么抛出异常;
*/
abstract class checkget_implements
{
    /* @var array 变量值的索引 */
    protected $keys;

    /**
     * @return mixed
     */
    public function getkeys()
    {
        return $this->keys;
    }

    /**
     * @param mixed $keys;
     * @return $this
     */
    public function setkeys($keys)
    {
        $this->keys = $keys;
        return $this;
    }

}
