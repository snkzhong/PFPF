<?php

namespace PFPF\Tests;

use function PFPF\has;

class HasTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $arr = [
            'name' => 'Jerry',
            'age' => 30,
            'country'   => 'It',
        ];

        $this->assertSame(true, has('name', $arr));
        $this->assertSame(false, has('score', $arr));

        $person = new FakePerson;
        $this->assertSame(true, has('name', $person));
        $this->assertSame(false, has('score', $person));
    }
}

class FakePerson
{
    public $name = 'Jerry';
    public $age = 30;
    public $country = 'It';
}