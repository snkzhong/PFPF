<?php

namespace PFPF\Tests;

use function PFPF\invertObj;

class InvertObjTest extends AbstractTestCase
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
            'CN'=> 'Li Na',
            'US'=> 'Anni',
            'IT'=> 'Anisen',
            'DE'=> 'Kemo',
        ];

        $this->assertSame($dist, invertObj($arr));
    }

}