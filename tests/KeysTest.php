<?php

namespace PFPF\Tests;

use function PFPF\keys;

class KeysTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'name' => 'Anni',
            'age'  => 20,
            'country' => 'CN'
        ];
        $this->assertSame(['name','age','country'], keys($arr));
    }

}