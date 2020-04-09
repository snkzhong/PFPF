<?php

namespace PFPF\Tests;

use function PFPF\not;

class NotTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(false, not(true));
        $this->assertSame(true, not(false));
        $this->assertSame(true, not((bool)null));
    }
}