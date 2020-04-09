<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;
use function PFPF\Internal\_arityCall;

function difference(...$lists)
{
    InvalidArgumentException::assertArrayCount(2, \count($lists), __FUNCTION__);

    return _arityCall('\array_diff', $lists);
}