<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function find(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    foreach($collection as $k => $it)
    {
        if ( $fn($it) )
        {
            return $it;
        }
    }

    return null;
}