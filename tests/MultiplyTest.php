<?php

namespace PFPF\Tests;

use function PFPF\multiply;

class MultiplyTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(72, multiply(8, 9));
        $this->assertSame(-42, multiply(6, -7));
        $this->assertSame(0, multiply(3, 0));
    }
}