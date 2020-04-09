<?php

namespace PFPF\Tests;

use function PFPF\pipe;
use function PFPF\Internal\_getFuncArgNum;

class PipeTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testClassMethod()
    {
        $pipef = pipe(2, [$this, 'say'], [$this, 'upper'], [$this, 'finish']);
        $this->assertSame('HELLO PIPE end', $pipef('hello')('pipe'));
    }

    public function testFunInNamespace()
    {
        $pipef = pipe(2, 'PFPF\Tests\minus', 'PFPF\Tests\multi6', 'PFPF\Tests\divide2');
        $this->assertSame(36, $pipef(20)(8));
    }

    public function say($prefix, $name)
    {
        return \sprintf('%s %s', $prefix, $name);
    }

    public function upper($str)
    {
        return \strtoupper($str);
    }

    public function finish($str)
    {
        return $str.' end';
    }
}

function minus(Int $a, Int $b)
{
    return $a - $b;
}

function multi6(Int $a)
{
    return $a * 6;
}

function divide2(Int $a)
{
    return $a / 2;
}