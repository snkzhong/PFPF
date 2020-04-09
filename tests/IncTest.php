<?php

namespace PFPF\Tests;

use function PFPF\inc;

class IncTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(10, inc(9));
        $this->assertSame(-4, inc(-5));
    }
}