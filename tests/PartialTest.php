<?php

namespace PFPF\Tests;

use function PFPF\partial;

class PartialTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $add3 = function($a, $b, $c) {
            return ($a + $b) * $c;
        };

        $this->assertSame(9, partial($add3, 1, 2)(3));
        $this->assertSame(35, partial($add3, 2)(3,7));
    }
}