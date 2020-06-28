<?php

namespace xltxlm\args\Request;


/**
 * 获取请求的参数，指定类型，指定默认值;
 */
class Args extends Args\Args_implements
{

    public function __invoke()
    {
        $this->case1_fromarray_nota_array_hit_check(gettype($this->getfromarray()) != 'array');
        $this->case1_key_notexist_hit_check(strlen($this->getkey()) == 0);

        //如果没有值，那么还是保持null，后面的类型判断会收拾的
        if (isset($this->getfromarray()[$this->getkey()])) {
            $this->setvalue($this->getfromarray()[$this->getkey()]);
        }

        return $this->case1_type($this->gettype());

    }

    protected function is_basic_type(string $type = null): bool
    {
        return in_array($type, [self::INTEGER, self::DOUBLE, self::STRING, self::BOOLEAN]);
    }

    protected function fix_value_inbasictype($value = null, string $type = null)
    {
        if ($this->is_basic_type($type)) {
            if (gettype($value) == $type) {
                return $value;
            } else {
                if ($type == self::INTEGER) {
                    return intval($value);
                }
                if ($type == self::DOUBLE) {
                    return floatval($value);
                }
                if ($type == self::STRING) {
                    return strval($value);
                }
                if ($type == self::BOOLEAN) {
                    return boolval($value);
                }
            }
        }
        throw new \Exception("只能格式化基础类型的变量");
    }


    /**
     * @return array|bool|int|string
     */
    function case1_type_hit()
    {
        $value_type = gettype($this->getvalue());
        $default_type = gettype($this->getdefault());

        $is_basic_type = $this->is_basic_type($this->gettype());

        if (!$is_basic_type && $value_type == self::NULL && $default_type == self::NULL) {
            //如果指定的是内置类型：数组，还可以抢救下。
            if ($this->gettype() == self::ARRAY) {
                return [];
            }
            throw new \Exception("取出的值和默认值都是空，并且被约束了类型：{$this->gettype()}");
        }


        $this->case1_value_type_notall_basictype_hit_check(!($this->is_basic_type($value_type) && $is_basic_type));
        $this->case1_default_type_notall_basictype_hit_check(!($this->is_basic_type($default_type) && $is_basic_type));

        /** 类型已经比对了，那么直接返回固定的值？ */
        if ($is_basic_type) {
            return $this->fix_value_inbasictype($this->case1_value($this->getvalue() === 0 || $this->getvalue() === '0' || !empty($this->getvalue())), $this->gettype());
        } else {
            return $this->case1_value($this->getvalue() === 0 || $this->getvalue() === '0' || !empty($this->getvalue()));
        }
    }


    function case1_type_nothit()
    {
        return $this->case1_value($this->getvalue() === 0 || $this->getvalue() === '0' || !empty($this->getvalue()));
    }

    function case1_default_type_notall_basictype_hit_check_detail()
    {
        $default_type = gettype($this->getdefault());
        if ($default_type == self::NULL) {
            return;
        }
        $gettype = $this->gettype();
        //数组类型一样的，也可以
        if ($default_type == $gettype) {
            return;
        }
        if ($default_type == self::OBJECT) {
            if ($this->getdefault() instanceof $gettype) {
                return;
            }
        }
        throw new \Exception("默认值是类型不是被约束的类型: $gettype");
    }

    function case1_value_type_notall_basictype_hit_check_detail()
    {
        $value_type = gettype($this->getvalue());
        if ($value_type == self::NULL) {
            return;
        }
        $gettype = $this->gettype();
        //数组类型一样的，也可以
        if ($value_type == $gettype) {
            return;
        }
        if ($value_type == self::OBJECT) {
            if ($this->getvalue() instanceof $gettype) {
                return;
            }
        }
        throw new \Exception("取出的值是类型不是被约束的类型: $gettype");
    }

    function case1_value_hit()
    {
        return $this->getvalue();
    }

    function case1_value_nothit()
    {
        return $this->getdefault();
    }


}