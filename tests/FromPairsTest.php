<?php

namespace PFPF\Tests;

use function PFPF\fromPairs;

class FromPairsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $pairs = [['name', 'test'], ['year', 2020], ['say', 'hello']];
        $dist = [
            'name'  => 'test',
            'year'  => 2020,
            'say'   => 'hello',
        ];
        $this->assertSame($dist, fromPairs($pairs));
    }
}