<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function take(int $length, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    return \array_slice($collection, 0, $length);
}