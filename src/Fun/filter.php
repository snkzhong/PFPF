<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function filter(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $resultCollection = [];
    foreach($collection as $index => $it)
    {
        if ($fn($it, $index, $collection))
        {
            // $resultCollection[$index] = $it;
            $resultCollection[] = $it;
        }
    }

    return $resultCollection;
}