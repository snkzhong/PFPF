<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function sort(callable $fn, $collection, $maintainKey=false)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $maintainKey ? \uasort($collection, $fn) : \usort($collection, $fn) ;
    return $collection;
}