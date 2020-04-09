<?php

namespace PFPF\Tests;

use function PFPF\intersection;

class IntersectionTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr1 = [11,38,72,92,60,47];
        $arr2 = [23,81,38,29,31,60,123];

        $this->assertSame([38,60], intersection($arr1, $arr2));
    }

}