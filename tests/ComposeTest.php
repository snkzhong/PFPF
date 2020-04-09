<?php

namespace PFPF\Tests;

use function PFPF\compose;

class ComposeTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testClassMethod()
    {
        $composed = compose([$this,'f3'], [$this,'f2'], [$this,'f1']);
        $this->assertSame($composed(10), 21); //10*2-3+4
        $this->assertSame($composed(15), 31); //15*2-3+4
    }

    public function testFuncInNamespace()
    {
        $composed = compose('PFPF\Tests\f3', 'PFPF\Tests\f2', 'PFPF\Tests\f1');
        $this->assertSame($composed(10), 21); //10*2-3+4
        $this->assertSame($composed(15), 31); //15*2-3+4
    }

    public function f1($num)
    {
        return $num * 2;
    }

    public function f2($num)
    {
        return $num - 3;
    }

    public function f3($num)
    {
        return $num + 4;
    }
}


function f1($num)
{
    return $num * 2;
}

function f2($num)
{
    return $num - 3;
}

function f3($num)
{
    return $num + 4;
}