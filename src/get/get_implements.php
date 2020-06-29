<?php
namespace xltxlm\args\get;


/**
 * 从get数组中取数据。;
*/
abstract class get_implements
{
    /* @var string 指定的索引 */
    protected $key;

    /**
     * @return mixed
     */
    public function getkey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key;
     * @return $this
     */
    public function setkey($key)
    {
        $this->key = $key;
        return $this;
    }

    /* @var void 锁定类型 */
    protected $type;

    /**
     * @return mixed
     */
    public function gettype()
    {
        return $this->type;
    }

    /**
     * @param mixed $type;
     * @return $this
     */
    public function settype($type)
    {
        $this->type = $type;
        return $this;
    }

    /* @var void 如果没有取到，采用这个默认值 */
    protected $default;

    /**
     * @return mixed
     */
    public function getdefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default;
     * @return $this
     */
    public function setdefault($default)
    {
        $this->default = $default;
        return $this;
    }

}
