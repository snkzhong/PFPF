<?php

namespace PFPF\Tests;

class FilterTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFilter()
    {
        $arr = [1,2,3,4,5,6,7,8,9,10];
        $arr2 = [6,7,8,9,10];
        $fn = function(Int $val) {
            return $val > 5;
        };

        // $rs = \PFPF\filter($fn, $arr);
        $this->assertSame($arr2, \PFPF\filter($fn, $arr));
    }
}