<?php

namespace PFPF\Tests;

class RejectTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = \PFPF\range(1, 10);

        $isEven = function($a) {
            return $a%2 == 0;
        };
        $isOdd = function($a) {
            return $a%2 == 1;
        };

        $this->assertSame([1,3,5,7,9], \PFPF\reject($isEven, $arr));
        $this->assertSame([2,4,6,8,10], \PFPF\reject($isOdd, $arr));
    }
}