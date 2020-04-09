<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function update(int $index, $replace, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 3);
    
    $idxAbs = \abs($index);
    if ($idxAbs >= 0 && $idxAbs < \count($collection))
    {
        $collection[$index] = $replace;
    }
    return $collection;
}