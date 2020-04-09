<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function findIndex(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    foreach($collection as $k => $it)
    {
        if ( $fn($it) )
        {
            return $k;
        }
    }

    return false;
}