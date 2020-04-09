<?php

namespace PFPF\Tests;

use function PFPF\eqBy;

class EqByTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $fn = function($a) {
            return \abs($a);
        };
        $this->assertSame(true, eqBy($fn, 5, -5));
        $this->assertSame(true, eqBy($fn)(5)(-5));
        $this->assertSame(false, eqBy($fn)(5)(6));
    }
}