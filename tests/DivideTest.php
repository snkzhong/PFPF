<?php

namespace PFPF\Tests;

use function PFPF\divide;
use function PFPF\curry2;

class DivideTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(2, divide(4, 2));
        $this->assertSame(3, curry2('\PFPF\divide')(9)(3));
        $this->assertSame(4, curry2('\PFPF\divide')(8)(2));
    }
}
