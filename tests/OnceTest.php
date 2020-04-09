<?php

namespace PFPF\Tests;

use function PFPF\once;

class OnceTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $addfun = function($a, $b) {
            return $a + $b;
        };
        $onceAdd = once($addfun);
        $oncef = once('PFPF\gt');

        $this->assertSame(true, $oncef(8, 7));
        $this->assertSame(true, $oncef(8, 7));
        $this->assertSame(8, $onceAdd(3)(5));
        $this->assertSame(8, $onceAdd(3,5));
    }
}