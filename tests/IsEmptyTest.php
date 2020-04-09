<?php

namespace PFPF\Tests;

use function PFPF\isEmpty;

class IsEmptyTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(true, isEmpty(null));
        $this->assertSame(true, isEmpty(''));
        $this->assertSame(false, isEmpty(0));
    }

}