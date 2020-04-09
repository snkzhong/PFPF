<?php

namespace PFPF\Tests;

use function PFPF\merge;

class MergeTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame('helloworld', merge('hello', 'world'));
        $this->assertSame([1,2,3,4,5,6,7,8], merge([1,2,3,4], [5,6,7,8]));
    }
}