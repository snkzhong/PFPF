<?php

namespace PFPF\Tests;

use function PFPF\propEq;

class PropEqTest extends AbstractTestCase
{
    public $name = 'PropTest';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'name' => 'Array',
            'scope'=> 'test',
        ];

        $this->assertSame(true, propEq('name', 'PropTest',  $this));
        $this->assertSame(true, propEq('name', 'Array', $arr));
        $this->assertSame(false, propEq('some', 'none', $arr));
    }
}