<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function add($a, $b)
{
    InvalidArgumentException::assertNumeric($a, __FUNCTION__, 1);
    InvalidArgumentException::assertNumeric($b, __FUNCTION__, 2);
    
    return $a + $b;
}