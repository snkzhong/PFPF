<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function zip($collectionA, $collectionB): array
{
    InvalidArgumentException::assertCollection($collectionA, __FUNCTION__, 1);
    InvalidArgumentException::assertCollection($collectionB, __FUNCTION__, 2);

    $collectionA = \PFPF\values($collectionA);
    $collectionB = \PFPF\values($collectionB);
    $resultArr = [];
    $length = \PFPF\min(\count($collectionA), \count($collectionB));
    $idx = 0;
    while($idx < $length)
    {
        $resultArr[$idx] = [$collectionA[$idx], $collectionB[$idx]];
        $idx++;
    }

    return $resultArr;
}