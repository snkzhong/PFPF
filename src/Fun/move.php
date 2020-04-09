<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function move(Int $from, Int $to, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 3);
    // InvalidArgumentException::assertArrayIndexSafe($collection, $from, __FUNCTION__, 1);
    // InvalidArgumentException::assertArrayIndexSafe($collection, $to, __FUNCTION__, 2);

    list($fromVal) = \array_splice($collection, $from, 1);
    \array_splice($collection, $to, 0, $fromVal);
    return $collection;
}