<?php

namespace PFPF\Tests;

use function PFPF\lte;

class LteTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, lte(82, 192));
        $this->assertSame(true, lte(5, 5));
        $this->assertSame(false, lte(32, 19));
    }

}