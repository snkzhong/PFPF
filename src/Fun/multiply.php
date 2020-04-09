<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function multiply($a, $b)
{
    InvalidArgumentException::assertNumeric($a, __FUNCTION__, 1);
    InvalidArgumentException::assertNumeric($a, __FUNCTION__, 2);

    return $a * $b;
}