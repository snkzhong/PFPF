<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function inc($num)
{
    InvalidArgumentException::assertNumeric($num, __FUNCTION__, 1);

    return $num + 1;
}