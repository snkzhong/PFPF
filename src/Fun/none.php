<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function none(callable $fn, $collection): Bool
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    foreach ($collection as $it)
    {
        if ($fn($it))
        {
            return false;
        }
    }

    return true;
}