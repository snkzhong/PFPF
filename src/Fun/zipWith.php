<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function zipWith(callable $fn, $collectionA, $collectionB): array
{
    InvalidArgumentException::assertCollection($collectionA, __FUNCTION__, 2);
    InvalidArgumentException::assertCollection($collectionB, __FUNCTION__, 3);

    $collectionA = \PFPF\values($collectionA);
    $collectionB = \PFPF\values($collectionB);
    $resultArr = [];
    $length = \PFPF\min(\count($collectionA), \count($collectionB));
    $idx = 0;
    while($idx < $length)
    {
        $resultArr[$idx] = $fn($collectionA[$idx], $collectionB[$idx]);
        $idx++;
    }

    return $resultArr;
}
