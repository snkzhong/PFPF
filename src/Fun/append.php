<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function append($a, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $collection[] = $a;
    return $collection;
}