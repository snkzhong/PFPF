<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function any(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    foreach($collection as $it)
    {
        if ($fn($it)) 
        {
            return true;
        }
    }

    return false;
}