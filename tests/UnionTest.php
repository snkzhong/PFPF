<?php

namespace PFPF\Tests;

class UnionTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = \PFPF\range(1, 10);
        $arr2 = \PFPF\range(5,15);

        // $this->assertSame([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15], \PFPF\union($arr1, $arr2));
        var_dump( \PFPF\union($arr1, $arr2) );
    }
}