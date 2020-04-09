<?php

namespace PFPF\Tests;

use function PFPF\chain;

class ChainTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1, 2, 3];
        $dist= [1, 1, 2, 2, 3, 3];
        $this->assertSame($dist, chain([$this, 'duplicate'], $arr));
        $this->assertSame([1, 4, 9], chain('PFPF\Tests\square', $arr));
    }

    public function duplicate($a)
    {
        return [$a, $a];
    }
}

function square($a)
{
    return $a * $a;
}