<?php

namespace PFPF\Tests;

use function PFPF\dropWhile;

class DropWhileTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3,4,5,6,7,8,9,10];

        $fn = function($val) {
            return $val <= 6;
        };

        $this->assertSame([7,8,9,10], dropWhile($fn, $arr));
    }
}
