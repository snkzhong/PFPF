<?php

namespace PFPF\Tests;

class RepeatTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame([1,1,1,1,1], \PFPF\repeat(1, 5));
        $this->assertSame(['hi','hi','hi','hi','hi'], \PFPF\repeat('hi', 5));
    }
}