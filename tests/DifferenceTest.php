<?php

namespace PFPF\Tests;

use function PFPF\difference;

class DifferenceTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = [1, 2, 3];
        $arr2 = [2, 3, 4];
        $arr3 = [3, 4, 5];
        $this->assertSame([1], difference($arr1, $arr2, $arr3));
    }
}
