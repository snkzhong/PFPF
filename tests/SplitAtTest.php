<?php

namespace PFPF\Tests;

class SplitAtTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $str = 'good job';
        $arr = [1,2,3,4,5];

        $this->assertSame(['good',' job'], \PFPF\splitAt(4,$str));
        $this->assertSame([[1,2,3],[4,5]], \PFPF\splitAt(3,$arr));
    }
}