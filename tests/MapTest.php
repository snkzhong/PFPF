<?php

namespace PFPF\Tests;

class MapTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3];
        $arr2 = [2,4,6];
        $fn = function($val) {
            return $val * 2;
        };

        $this->assertSame($arr2, \PFPF\map($fn, $arr));
    }
}