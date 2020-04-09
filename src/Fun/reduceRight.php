<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function reduceRight(callable $fn, $acc, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 3);

    $idx = \count($collection) - 1;
    while ($idx >= 0)
    {
        $acc = $fn($acc, $collection[$idx--], $idx, $collection);
    }

    return $acc;
}