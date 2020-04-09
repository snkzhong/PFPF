<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function map(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $resultCollection = [];
    foreach($collection as $index => $it)
    {
        $resultCollection[$index] = $fn($it, $index, $collection);
    }

    return $resultCollection;
}