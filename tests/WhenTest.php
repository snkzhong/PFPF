<?php

namespace PFPF\Tests;

class WhenTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gt10 = \PFPF\curry('\PFPF\gt', \PFPF\_, 10);
        $this->assertSame(13, \PFPF\when($gt10, '\PFPF\inc', 12));
    }
}
