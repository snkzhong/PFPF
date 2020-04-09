<?php

namespace PFPF\Tests;

use function PFPF\product;

class ProductTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = [1,2,3,4,5];
        $arr2 = [9,23,0,-42,12];

        $this->assertSame(120, product($arr1));
        $this->assertSame(0, product($arr2));
    }
}