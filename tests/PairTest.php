<?php

namespace PFPF\Tests;

use function PFPF\pair;

class PairTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(['zhong', 'qin'], pair('zhong', 'qin'));
        $this->assertSame(['name', 'age'], pair('name', 'age'));
    }
}