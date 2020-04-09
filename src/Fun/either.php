<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;
use function PFPF\Internal\_getFuncArgNum;
use function PFPF\Internal\_either;

function either(...$fns)
{
    $count = \count($fns);
    InvalidArgumentException::assertArrayCount(2, $count, __FUNCTION__);
    foreach ($fns as $index => $fn)
    {
        InvalidArgumentException::assertCallback($fn, __FUNCTION__, $index);
    }

    $predicateArgNum = _getFuncArgNum($fns[0]);

    $finalFn = function(...$arguments) use ($fns)
    {
        return _either($fns, $arguments);
    };
    return curryN($predicateArgNum, $finalFn);
}