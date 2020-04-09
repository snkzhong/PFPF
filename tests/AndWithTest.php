<?php

namespace PFPF\Tests;

use function PFPF\andWith;

class And2Test extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, andWith(1, true));
        $this->assertSame(false, andWith(false, 0));
        $this->assertSame(false, andWith(0, true));
        $this->assertSame(true, andWith(1, 'test'));
    }
}