<?php
namespace xltxlm\args\checkvals;


/**
 * checkval的多值数组检测版本;
*/
abstract class checkvals_implements
{
    /* @var array 值s */
    protected $vals;

    /**
     * @return mixed
     */
    public function getvals()
    {
        return $this->vals;
    }

    /**
     * @param mixed $vals;
     * @return $this
     */
    public function setvals($vals)
    {
        $this->vals = $vals;
        return $this;
    }

}
