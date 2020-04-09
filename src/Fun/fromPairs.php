<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function fromPairs($collection): Array
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 1);
    $resultArr = [];

    foreach($collection as $pair)
    {
        list($k, $v) = $pair;
        $resultArr[$k] = $v;
    }

    return $resultArr;
}