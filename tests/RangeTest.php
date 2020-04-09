<?php

namespace PFPF\Tests;

class RangeTest extends AbstractTestCase
{
    public $name = 'PropTest';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame([1,2,3,4,5], \PFPF\range(1,5));
        $this->assertSame([10,8,6,4,2,0], \PFPF\range(10,0,-2));
    }
}