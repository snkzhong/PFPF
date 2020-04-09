<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function dropLastWhile(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $idx = \count($collection) - 1;
    while ($idx >= 0)
    {
        if ( $fn( $collection[$idx--] ) )
        {
            \array_pop($collection);
        }
        else 
        {
            break;
        }
    }

    return $collection;
}