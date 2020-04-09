<?php

namespace PFPF\Tests;

use function PFPF\prop;

class PropTest extends AbstractTestCase
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

        $this->assertSame('PropTest', prop('name', $this));
        $this->assertSame('Array', prop('name', $arr));
    }
}