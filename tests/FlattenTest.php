<?php

namespace PFPF\Tests;

use function PFPF\flatten;

class FlattenTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [1, 2, [3, 4], 5, [6, [7, 8, [9, [10, 11], 12]]]];
        $result = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $this->assertSame($result, flatten($arr));

        $arr = [
            'name'  => 'flatten',
            'time'  => '2020-04-04',
            'test',
            ['hello', '2020'],
            [[23, 90], ['name'=>'good job']]
        ];
        $result = [
            'name' => 'good job',
            'time' => '2020-04-04',
            'test',
            'hello',
            '2020',
            23,
            90
        ];
        $this->assertSame($result, flatten($arr));
    }
}
