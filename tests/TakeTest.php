<?php

namespace PFPF\Tests;

class TakeTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = \PFPF\range(5, 10);

        $this->assertSame([5,6,7], \PFPF\take(3, $arr));
    }
}