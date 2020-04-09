<?php

namespace PFPF\Tests;

use function PFPF\negate;

class NegateTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(-23, negate(23));
        $this->assertSame(89, negate(-89));
    }
}