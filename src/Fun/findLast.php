<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function findLast(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $idx = \count($collection) - 1;
    while($idx >= 0)
    {
        $it = $collection[$idx--];
        if ($fn($it))
        {
            return $it;
        }
    }

    return null;
}