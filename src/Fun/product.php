<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function product($collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 1);

    return reduce('\PFPF\multiply', 1, $collection);
}