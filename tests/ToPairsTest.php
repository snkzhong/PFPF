<?php

namespace PFPF\Tests;

class ToPairsTest extends AbstractTestCase
{
    public $name = 'ToPairsTest';
    public $foo = 'bar';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'name' => 'ToPairsTest',
            'foo'  => 'bar',
        ];
        $this->assertSame([['name','ToPairsTest'], ['foo','bar']], \PFPF\toPairs($this));
        $this->assertSame([['name','ToPairsTest'], ['foo','bar']], \PFPF\toPairs($arr));
    }
}