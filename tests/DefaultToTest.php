<?php

namespace PFPF\Tests;

use function PFPF\defaultTo;

class DefaultToTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame(42, defaultTo(42, null));
        $this->assertSame('good job', defaultTo('test', 'good job'));
    }
}
