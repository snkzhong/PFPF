<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function chain(callable $fn, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    return flatten( map($fn, $collection) );
}