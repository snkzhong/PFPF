<?php

namespace PFPF\Tests;

use function PFPF\either;

class EitherTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gt10 = function($a) {
            return $a > 10;
        };
        $lt30 = function($a) {
            return $a < 30;
        };

        $this->assertSame(true, either($gt10, $lt30)(40));
        $this->assertSame(true, either($gt10, $lt30)(0));
    }
}