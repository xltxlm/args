<?php
namespace xltxlm\args\test\get\invoke_241_0Test;

/**
* 测试案例的数据供给
*/
Trait invoke_241_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["name","good",[["name"=>"good"]],"存在索引，没强制任何东西"],
        ["name",null,[["a"]],"不存在索引，没强制任何东西"],
        ["name",1,[["name"=>"1xx"],\xltxlm\args\Request\Args::INTEGER],"存在索引，强制格式"],
        ["name","w",[["null"=>"aw"],\xltxlm\args\Request\Args::STRING,"w"],"不存在索引，强制类型+默认值 = 字符串"],
        ["name",33,[["null"=>"aw"],\xltxlm\args\Request\Args::INTEGER,"33"],"不存在索引，强制类型+默认值 = 数字"],
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

