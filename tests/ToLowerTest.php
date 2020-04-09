<?php

namespace PFPF\Tests;

class ToLowerTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame('foo bar', \PFPF\toLower('Foo Bar'));
    }
}