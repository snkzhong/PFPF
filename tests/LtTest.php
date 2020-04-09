<?php

namespace PFPF\Tests;

use function PFPF\lt;

class LtTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, lt(1, 5));
        $this->assertSame(false, lt(32, 19));
    }

}