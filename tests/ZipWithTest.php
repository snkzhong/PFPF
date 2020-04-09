<?php

namespace PFPF\Tests;

class ZipWithTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = ['foo', 'hello', 'name'=>'WhenTest'];
        $arr2 = ['bar', 'world', 'nice'];
        $this->assertSame(['foobar', 'helloworld', 'WhenTestnice'], \PFPF\zipWith('\PFPF\contact', $arr1, $arr2));
    }
}


