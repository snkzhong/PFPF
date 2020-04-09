<?php

namespace PFPF\Tests;

use function PFPF\is;

class IsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $instance = new FakeType;
        $this->assertSame(true, is('PFPF\Tests\FakeType', $instance));
        $this->assertSame(true, is('PFPF\Tests\IsTest', $this));
    }

}

class FakeType
{
    public $name = 'FakeType';
}