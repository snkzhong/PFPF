<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function values($collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 1);

    return \array_values($collection);
}
