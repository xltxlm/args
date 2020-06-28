<?php
namespace xltxlm\args\Request\Args;

/**
 * :类;
 * 获取请求的参数，指定类型，指定默认值;
*/
abstract class Args_implements
{
    /* boolean */
    public const BOOLEAN="boolean";
    /* integer */
    public const INTEGER="integer";
    /* double */
    public const DOUBLE="double";
    /* string */
    public const STRING="string";
    /* array */
    public const ARRAY="array";
    /* object */
    public const OBJECT="object";
    /* resource */
    public const RESOURCE="resource";
    /* NULL */
    public const NULL="NULL";
    /* unknown type */
    public const UNKNOWN_TYPE="unknown type";


/* @var string  要获取的值的索引 */
    protected $key = '';





    /**
    * 要获取的值的索引;
    * @return string;
    */
            public function getkey():string        {
                return $this->key;
        }

    
    




/**
* @param string $key;
* @return $this
*/
    public function setkey(string $key  = "")
    {
    $this->key = $key;
    return $this;
    }



/* @var array  取值的源数组 */
    protected $fromarray = [];





    /**
    * 取值的源数组;
    * @return array;
    */
            public function getfromarray():array        {
                return $this->fromarray;
        }

    
    




/**
* @param array $fromarray;
* @return $this
*/
    public function setfromarray(array $fromarray  = [])
    {
    $this->fromarray = $fromarray;
    return $this;
    }



/* @var void  默认值 */
        protected $default;





    /**
    * 默认值;
    * @return void;
    */
            public function getdefault()        {
                return $this->default;
        }

    
    




/**
* @param  $default;
* @return $this
*/
    public function setdefault( $default )
    {
    $this->default = $default;
    return $this;
    }



/* @var string  锁定类型 */
    protected $type = '';





    /**
    * 锁定类型;
    * @return string;
    */
            public function gettype():string        {
                return $this->type;
        }

    
    




/**
* @param string $type;
* @return $this
*/
    public function settype(string $type  = "")
    {
    $this->type = $type;
    return $this;
    }



/* @var void   */
        private $value;





    /**
    * ;
    * @return void;
    */
            protected function getvalue()        {
                return $this->value;
        }

    
    




/**
* @param  $value;
* @return $this
*/
    protected function setvalue( $value )
    {
    $this->value = $value;
    return $this;
    }



/**
*  输出结论;
*  @return ;
*/
abstract public function __invoke();
/**
* @var string $type  
*  判断变量是不是基础的类型，可以互相进行转换;
*  @return :bool;
*/
abstract protected function is_basic_type(string $type = null):bool;
/**
* @var  $value  
* @var string $type  
*  传入值，格式化成指定的类型。;
*  @return ;
*/
abstract protected function fix_value_inbasictype( $value = null,string $type = null);
    /**
    * 命中一个，抛出异常信息/执行对应的命中函数
    是否传递了数组进来    */
    protected function case1_fromarray_nota_array_hit_check(bool $case1){
        if($case1){
                throw new \Exception("传递的数据源不是数组类型");
        }
    }



    /**
    * 命中一个，抛出异常信息/执行对应的命中函数
        */
    protected function case1_key_notexist_hit_check(bool $case1){
        if($case1){
                throw new \Exception("没有传递索引的key值");
        }
    }




    /**
    * 命中一个，执行对应的命中函数
    没有值的情况下，用默认值来替代    */
    protected function case1_value(bool $case1){
        if($case1){
            return $this->case1_value_hit();
        }else{
            return $this->case1_value_nothit();
        }
    }
    abstract function case1_value_hit();
    abstract function case1_value_nothit();

    /**
    * 命中一个，执行对应的命中函数
    强制约束类型的情况下的取舍    */
    protected function case1_type(bool $case1){
        if($case1){
            return $this->case1_type_hit();
        }else{
            return $this->case1_type_nothit();
        }
    }
    abstract function case1_type_hit();
    abstract function case1_type_nothit();
    /**
    * 命中一个，抛出异常信息/执行对应的命中函数
        */
    protected function case1_value_type_notall_basictype_hit_check(bool $case1){
        if($case1){
        return $this->case1_value_type_notall_basictype_hit_check_detail();
        }
    }


        abstract function case1_value_type_notall_basictype_hit_check_detail();

    /**
    * 命中一个，抛出异常信息/执行对应的命中函数
        */
    protected function case1_default_type_notall_basictype_hit_check(bool $case1){
        if($case1){
        return $this->case1_default_type_notall_basictype_hit_check_detail();
        }
    }


        abstract function case1_default_type_notall_basictype_hit_check_detail();

}