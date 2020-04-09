<?php

namespace PFPF\Tests;

use function PFPF\cond;

class CondTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test()
    {
        $gt10 = function ($a) {
            return $a > 10;
        };
        $gt20 = function ($a) {
            return $a > 20;
        };
        $gt30 = function ($a) {
            return $a > 30;
        };
        $gt50 = function ($a) {
            return $a > 50;
        };

        $pairs = [
            [$gt50, 'gt 50'],
            [$gt30, 'gt 30'],
            [$gt20, 'gt 20'],
            [$gt10, 'gt 10'],
        ];
        $this->assertSame('gt 10', cond($pairs,15));
        $this->assertSame('gt 30', cond($pairs,40));
        $this->assertSame('gt 50', cond($pairs,70));
    }
}