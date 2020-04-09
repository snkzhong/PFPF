<?php

namespace PFPF\Tests;

use function PFPF\identity;

class IdentityTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(68, identity(68));
        $this->assertSame('hello', identity('hello'));
    }
}