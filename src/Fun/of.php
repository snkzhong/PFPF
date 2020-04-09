<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function of(...$collection): Array
{
    InvalidArgumentException::assertArrayCount(1, \count($collection), __FUNCTION__);
    
    return $collection;
}