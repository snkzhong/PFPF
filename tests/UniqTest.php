<?php

namespace PFPF\Tests;

class UniqTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [2,9,1,8,6,8,2];
        $arr2= [
            7,4,42,
            'name'=> 'uniq',
            42,7,11,
            'foo' => 'bar',
        ];
        $dist = [
            7,4,42,
            'name'=> 'uniq',
            5     => 11,
            'foo' => 'bar',
        ];

        $this->assertSame([2,9,1,8,6], \PFPF\uniq($arr));
        $this->assertSame($dist, \PFPF\uniq($arr2));
    }
}