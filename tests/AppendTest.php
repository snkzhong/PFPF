<?php

namespace PFPF\Tests;

use function PFPF\append;

class AppendTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3,4,5,6,7,8,9,10];
        $arr1 = [1,2,3,4,5,6,7,8,9,10,11];
        $r = append(11, $arr);
        $this->assertSame($arr1, $r);
        $this->assertSame([1,2,3,4,5,6,7,8,9,10], $arr);
    }
}