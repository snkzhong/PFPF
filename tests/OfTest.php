<?php

namespace PFPF\Tests;

use function PFPF\of;

class OfTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame([1, 2], of(1, 2));
        $this->assertSame(['hello', 'PFPF'], of('hello', 'PFPF'));
    }
}