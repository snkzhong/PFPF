<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function dec($num)
{
    InvalidArgumentException::assertNumeric($num, __FUNCTION__, 1);
    
    return $num - 1;
}