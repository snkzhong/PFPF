<?php

namespace PFPF\Tests;

use function PFPF\none;

class NoneTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = [1,3,5,7,9];
        $arr2 = [2,4,6,8,10];
        $isEven = function($a) { return $a%2 == 0; };
        $isOdd = function($a) { return $a%2 == 1; };

        $this->assertSame(true, none($isEven, $arr1));
        $this->assertSame(false, none($isOdd, $arr1));
        $this->assertSame(false, none($isEven, $arr2));
        $this->assertSame(true, none($isOdd, $arr2));
    }
}