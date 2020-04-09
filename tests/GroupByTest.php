<?php

namespace PFPF\Tests;

use function PFPF\groupBy;

class GroupByTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $persons = [
            ['name'=>'Jason', 'score'=>60],
            ['name'=>'Jack', 'score'=>70],
            ['name'=>'Andy', 'score'=>80],
            ['name'=>'Bruce', 'score'=>90],
        ];
        $fn = function($person) {
            if ($person['score'] >= 80)
            {
                return 'A';
            }
            if ($person['score'] >= 60)
            {
                return 'B';
            }
        };
        $dist = [
            'B' => [ ['name'=>'Jason', 'score'=>60], ['name'=>'Jack', 'score'=>70] ],
            'A' => [ ['name'=>'Andy', 'score'=>80], ['name'=>'Bruce', 'score'=>90] ],
        ];
        
        $this->assertSame($dist, groupBy($fn, $persons));
    }
}