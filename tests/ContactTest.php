<?php

namespace PFPF\Tests;

use function PFPF\contact;

class ContactTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $this->assertSame('HelloWorld', contact('Hello', 'World'));
        $this->assertSame([1,2,3,4,5,6], contact([1,2,3], [4,5,6]));
    }
}