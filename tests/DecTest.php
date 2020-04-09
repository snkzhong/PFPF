<?php

namespace PFPF\Tests;

use function PFPF\dec;

class DecTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(9, dec(10));
        $this->assertSame(4, dec(5));
    }
}