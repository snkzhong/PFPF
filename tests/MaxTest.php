<?php

namespace PFPF\Tests;

use function PFPF\max;

class MaxTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(320, max(9,320));
        $this->assertSame(-21, max(-21,-73));
    }
}