<?php

namespace PFPF\Tests;

class ReverseTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello';
        $arr = [1,2,3,4,5];

        $this->assertSame('olleh', \PFPF\reverse($str));
        $this->assertSame([5,4,3,2,1], \PFPF\reverse($arr));
    }
}