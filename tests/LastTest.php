<?php

namespace PFPF\Tests;

use function PFPF\last;

class LastTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame('o', last('hello'));
        $this->assertSame(7, last([1,2,3,4,5,7]));
    }

}