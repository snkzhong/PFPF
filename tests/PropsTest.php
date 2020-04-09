<?php

namespace PFPF\Tests;

use function PFPF\props;

class PropsTest extends AbstractTestCase
{
    public $name = 'PropsTest';
    public $fun = 'props';

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

        $this->assertSame(['PropsTest', 'props'], props(['name', 'fun'],  $this));
        $this->assertSame(['Array', null], props(['name', 'some'], $arr));
    }
}