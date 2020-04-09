<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function reject(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $_reject = function(...$arguments) use ($fn) {
        return !$fn(...$arguments);
    };

    return filter($_reject, $collection);
}