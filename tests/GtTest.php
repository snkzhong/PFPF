<?php

namespace PFPF\Tests;

use function PFPF\curry;

class GtTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gtFun = curry('PFPF\gt');
        $this->assertSame(true, $gtFun(5)(4));
        $this->assertSame(false, $gtFun(3,4));
    }
}