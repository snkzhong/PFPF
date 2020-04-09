<?php

namespace PFPF\Tests;

use function PFPF\contains;

class ContainsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, contains('he', 'hello'));
        $this->assertSame(false, contains('wo', 'hello'));
        $this->assertSame(true, contains(1, [1,2,3]));
    }
}
