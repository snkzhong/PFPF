<?php

namespace PFPF\Tests;

use function PFPF\innerJoin;

class InnerJoinTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $records = [
            ['id'=>12, 'name'=>'Zhong Qin'],
            ['id'=>392,'name'=>'Jason'],
            ['id'=>67, 'name'=>'Jack'],
            ['id'=>91, 'name'=>'Anni'],
        ];
        $ids = [91, 12];
        $fn = function(Array $record, $id) {
            return $record['id'] == $id;
        };
        $dist = [
            ['id'=>12, 'name'=>'Zhong Qin'],
            ['id'=>91, 'name'=>'Anni'],
        ];

        $this->assertSame($dist, innerJoin($fn, $records, $ids));
    }
}