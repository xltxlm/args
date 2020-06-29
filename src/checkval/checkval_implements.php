<?php
namespace xltxlm\args\checkval;


/**
 * 检查值是否存在为null，如果是，抛出异常;
*/
abstract class checkval_implements
{
    /* @var void 变量的值，如果是null，那么将抛出异常 */
    protected $val;

    /**
     * @return mixed
     */
    public function getval()
    {
        return $this->val;
    }

    /**
     * @param mixed $val;
     * @return $this
     */
    public function setval($val)
    {
        $this->val = $val;
        return $this;
    }

    /* @var string 如果值是null，也抛出错误的描述信息 */
    protected $message;

    /**
     * @return mixed
     */
    public function getmessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message;
     * @return $this
     */
    public function setmessage($message)
    {
        $this->message = $message;
        return $this;
    }

}
