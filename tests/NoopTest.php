<?php

namespace PFPF\Tests;

use function PFPF\noop;

class NoopTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(null, noop());
    }
}