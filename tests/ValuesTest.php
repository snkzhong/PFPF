<?php

namespace PFPF\Tests;

class ValuesTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'foo'   => 'bar',
            'name'  => 'ValuesTest',
            'author'=> 'Zhong Qin',
        ];

        $this->assertSame(['bar', 'ValuesTest', 'Zhong Qin'], \PFPF\values($arr));
    }
}