<?php
namespace xltxlm\args\test\checkval\invoke_242_0Test;

/**
* 测试案例的数据供给
*/
Trait invoke_242_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["name",null,[],"为null，抛出异常"],
        ]+ $this->remoteconfig();
    }

    /**
     * 获取远程配置代码。
     * 因为是远程获取配置的原因，所以传递过去一定是字符串
     */
    function remoteconfig()
    {
        $config = [];
        return $config;
    }
}

