<?php
namespace xltxlm\args\test\Request\Args\invoke_array_240_0Test;

/**
* 测试案例的数据供给
*/
Trait invoke_array_240_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["name",[],\xltxlm\args\Request\Args::ARRAY,"值是null。要求类型是array。应该返回【】"],
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

