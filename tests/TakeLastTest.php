<?php

namespace PFPF\Tests;

class TakeLastTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = \PFPF\range(5, 10);

        $this->assertSame([8,9,10], \PFPF\takeLast(3, $arr));
    }
}