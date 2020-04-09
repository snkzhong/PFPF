<?php

namespace PFPF\Tests;

use function PFPF\invert;

class InvertTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'Zhong Qin' => 'CN',
            'Li Na' => 'CN',
            'Anni'  => 'US',
            'Anisen'=> 'IT',
            'Kemo'  => 'DE',
        ];
        $dist = [
            'CN'=> ['Zhong Qin', 'Li Na'],
            'US'=> 'Anni',
            'IT'=> 'Anisen',
            'DE'=> 'Kemo',
        ];

        $this->assertSame($dist, invert($arr));
    }

}