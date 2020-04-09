<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function length($list)
{
    InvalidArgumentException::assertStringOrCollection($list, __FUNCTION__, 1);

    if (\is_string($list))
    {
        return \strlen($list);
    }
    else 
    {
        return \count($list);
    }
}