<?php

namespace PFPF\Tests;

use function PFPF\juxt;

class JuxtTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame([632,-12], juxt(['PFPF\max', 'PFPF\min'], [82,-12,9,12,50,-8,632]));
    }

}