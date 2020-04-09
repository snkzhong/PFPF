<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function takeLast(int $length, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);
    
    return \array_slice($collection, \count($collection)-$length);
}