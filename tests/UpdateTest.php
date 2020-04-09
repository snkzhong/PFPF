<?php

namespace PFPF\Tests;

class UpdateTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = ['a','b','c','d'];
        $this->assertSame(['a','_','c','d'], \PFPF\update(1,'_',$arr));
        $this->assertSame(['a','b','c','d'], \PFPF\update(11,'_',$arr));
    }
}