<?php

namespace PFPF\Tests;

class ZipTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = ['foo', 'hello', 'name'=>'WhenTest'];
        $arr2 = ['bar', 'world', 'nice'];
        $this->assertSame([['foo','bar'], ['hello','world'], ['WhenTest','nice']], \PFPF\zip($arr1, $arr2));
    }
}

