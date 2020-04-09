<?php

namespace PFPF\Tests;

class ToUpperTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame('FOO BAR', \PFPF\toUpper('Foo Bar'));
    }
}