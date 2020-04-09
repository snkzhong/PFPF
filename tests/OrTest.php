<?php

namespace PFPF\Tests;

use function PFPF\or2;

class Or2Test extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, or2(true, false));
        $this->assertSame(false, or2(false, false));
    }
}