<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function findLastIndex(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $idx = \count($collection) - 1;
    while($idx >= 0)
    {
        if ($fn($collection[$idx--]))
        {
            return $idx;
        }
    }

    return false;
}