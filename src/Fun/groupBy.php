<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function groupBy(callable $fn, $collection = null)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $resultArray = [];
    $key = '';
    foreach($collection as $it)
    {
        $key = $fn($it);
        if (!isset($resultArray[$key]))
        {
            $resultArray[$key] = [];
        }

        $resultArray[$key][] = $it;
    }

    return $resultArray;
}