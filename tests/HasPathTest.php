<?php

namespace PFPF\Tests;

use function PFPF\hasPath;

class HasPathTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'team' => 'PFPF',
            'employees'=> 10,
            'branch' => [
                'pm' => 'PM',
                'rd' => 'RD',
                'ue' => 'UE',
                'fe' => 'FE',
                'qa' => 'QA',
            ]
        ];

        $this->assertSame(true, hasPath(['branch', 'rd'], $arr));
        $this->assertSame(false, hasPath(['branch', 'ui'], $arr));

        $obj3 = new FakeNestObj;
        $obj2 = new FakeNestObj;
        $obj2->next = $obj3;
        $obj1 = new FakeNestObj;
        $obj1->next = $obj2;

        $this->assertSame(true, hasPath(['next', 'next', 'next'], $obj1));
        $this->assertSame(false, hasPath(['next', 'next', 'next', 'next'], $obj1));
    }
}

class FakeNestObj
{
    public $next;
}