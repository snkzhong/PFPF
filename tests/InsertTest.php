<?php

namespace PFPF\Tests;

use function PFPF\insert;

class InsertTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3,4,5];
        $this->assertSame([1,2,3,7,4,5], insert(3, 7, $arr));
        $this->assertSame([1,2,9,8,3,4,5], insert(2, [9, 8], $arr));
    }

}