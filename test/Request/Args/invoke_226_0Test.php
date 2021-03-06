<?php
namespace xltxlm\args\test\Request\Args;

use PHPUnit\Framework\TestCase;
use xltxlm\args\Request\Args;

/**
*
*/
class invoke_226_0Test extends TestCase
{
    use invoke_226_0Test\invoke_226_0Provider; #<---本次测试的数据供给来源

    /**
    * @test
    * @dataProvider MyProvider <---本次测试的数据供给来源,3个索引分别对准本函数的3个参数
    * $input 输入值
    * $expected 期望的结果
    */
    public function __invoke($input,$expected,$args)
    {

        $result = $this->runcode($input,$args);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
    * 真正的逻辑计算
    * $input 输入值
    * $expected 期望的结果
    */
    private function runcode($input,$args)
    {
        return (new Args())
            ->setfromarray($args[0])
            ->setdefault($args[1])
            ->setkey($input)
            ->__invoke();
    }

}

