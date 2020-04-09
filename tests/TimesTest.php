<?php

namespace PFPF\Tests;

class TimesTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame([0,1,2,3,4,5], \PFPF\times('\PFPF\identity', 6));
    }
}