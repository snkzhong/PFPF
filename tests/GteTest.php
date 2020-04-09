<?php

namespace PFPF\Tests;

use function PFPF\gt;
use function PFPF\curry;

class GteTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gte = curry('PFPF\gte');
        $this->assertSame(true, $gte(10)(5));
        $this->assertSame(false, $gte(6,9));
    }
}