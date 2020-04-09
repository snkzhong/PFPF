<?php

namespace PFPF\Tests;

use function PFPF\apply;

class ApplyTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testClassMethos()
    {
        $this->assertSame(35, apply([$this, 'f'])(3)(4)(5));
        $this->assertSame('hello apply', apply([$this, 'say'])('hello', 'apply'));
    }

    public function testFunInNamespace()
    {
        $this->assertSame(35, apply('PFPF\Tests\add3')(3)(4)(5));
    }

    public function f($a, $b, $c)
    {
        return ($a + $b) * $c;
    }

    public function say($prefix, $name)
    {
        return $prefix.' '.$name;
    }
}

function add3($a, $b, $c)
{
    return ($a + $b) * $c;
}