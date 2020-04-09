<?php

namespace PFPF\Tests;

class StartsWithTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'foo bar';
        $arr = ['a','b','c','d','e'];
        $this->assertSame(true, \PFPF\startsWith('fo', $str));
        $this->assertSame(false, \PFPF\startsWith('fa', $str));
        $this->assertSame(true, \PFPF\startsWith(['a','b'], $arr));
        $this->assertSame(false, \PFPF\startsWith(['a','c'], $arr));
    }
}