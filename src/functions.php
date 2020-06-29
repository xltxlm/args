<?php

/**
* 从get数组中取数据。*/
function get(string $key = null, $type = null, $default = null)  {
    return (new xltxlm\args\get)
        ->setkey($key)
        ->settype($type)
        ->setdefault($default)
        ->__invoke();
}

/**
* 从post数组中取数据。*/
function post(string $key = null, $type = null, $default = null)  {
    return (new xltxlm\args\post)
        ->setkey($key)
        ->settype($type)
        ->setdefault($default)
        ->__invoke();
}

/**
* 从cookie数组中取数据。*/
function cookie(string $key = null, $type = null, $default = null)  {
    return (new xltxlm\args\cookie)
        ->setkey($key)
        ->settype($type)
        ->setdefault($default)
        ->__invoke();
}

/**
* 检查值是否存在为null，如果是，抛出异常*/
function checkval( $val = null,string $message = null)  :bool{
    return (new xltxlm\args\checkval)
        ->setval($val)
        ->setmessage($message)
        ->__invoke();
}

/**
* 检测get变量值，如果为null，那么抛出异常*/
function checkget(array $keys = null)  :bool{
    return (new xltxlm\args\checkget)
        ->setkeys($keys)
        ->__invoke();
}

/**
* 检测post变量值，如果为null，那么抛出异常*/
function checkpost(array $keys = null)  :bool{
    return (new xltxlm\args\checkpost)
        ->setkeys($keys)
        ->__invoke();
}

/**
* checkval的多值数组检测版本*/
function checkvals(array $vals = null)  :bool{
    return (new xltxlm\args\checkvals)
        ->setvals($vals)
        ->__invoke();
}

