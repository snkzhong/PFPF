<?php

namespace PFPF\Tests;

use function PFPF\length;

class LengthTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(5, length('hello'));
        $this->assertSame(6, length([1,2,3,4,5,7]));
    }

}