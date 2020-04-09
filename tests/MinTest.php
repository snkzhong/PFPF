<?php

namespace PFPF\Tests;

use function PFPF\min;

class MinTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(1, min(3,1));
        $this->assertSame(-823, min(-321,-823));
    }
}