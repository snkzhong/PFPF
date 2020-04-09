<?php

namespace PFPF\Tests;

class UntilTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gtCurry = \PFPF\curry('\PFPF\gt');
        $gt100 = $gtCurry(\PFPF\_, 100);
        $multiplyCurry = \PFPF\curry('\PFPF\multiply');
        $multiply2 = $multiplyCurry(2);
        $this->assertSame(128, \PFPF\until($gt100, $multiply2, 1));
    }
}