<?php

namespace PFPF\Tests;

use function PFPF\add;

class AddTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $addCurry = \PFPF\curry('\PFPF\add');

        $this->assertSame(8, $addCurry(3, 5));
        $this->assertSame(8, $addCurry(3)(5));
        $this->assertSame(6, add(2, 4));
        $this->assertSame(10, add(7, 3));
    }
}