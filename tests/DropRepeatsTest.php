<?php

namespace PFPF\Tests;

use function PFPF\dropRepeats;

class DropRepeatsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1,2,3,4,5,1,9,8,4,5,3,6,2,2];
        $arr2 = [
            'name' => 'test',
            'test', 2, 3, 4, 3, 2
        ];
        $this->assertSame([1,2,3,4,5,9,8,6], dropRepeats($arr));
        $this->assertSame(['name'=>'test',2,3,4], dropRepeats($arr2));
    }
}
