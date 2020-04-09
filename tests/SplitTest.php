<?php

namespace PFPF\Tests;

class SplitTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'hello world';
        $dist = ['h','e','l','l','o',' ','w','o','r','l','d'];

        $this->assertSame($dist, \PFPF\split('//', $str));

        $this->assertSame(['hell',' w', 'rld'], \PFPF\split('/o/', $str));
    }
}