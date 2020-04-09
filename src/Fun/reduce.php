<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function reduce(callable $fn, $acc, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 3);

    foreach($collection as $index => $it)
    {
        $acc = $fn($acc, $it, $index, $collection);
    }

    return $acc;
}