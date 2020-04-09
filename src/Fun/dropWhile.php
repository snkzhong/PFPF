<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function dropWhile(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    foreach($collection as $k => $it)
    {
        if ( $fn($it) )
        {
            \array_shift($collection);
        }
        else 
        {
            break;
        }
    }

    return $collection;
}