<?php

namespace PFPF\Tests;

use function PFPF\join;

class JoinTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [7, 9, 11, 6];
        $this->assertSame('7-9-11-6', join('-', $arr));
        $this->assertSame('79116', join('', $arr));
    }

}