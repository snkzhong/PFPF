<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function negate($number)
{
    InvalidArgumentException::assertNumeric($number, __FUNCTION__, 1);

    return - $number;
}