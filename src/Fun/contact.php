<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function contact(...$arguments)
{
    InvalidArgumentException::assertArrayCount(2, \count($arguments), __FUNCTION__);
    InvalidArgumentException::assertSameType($arguments, __FUNCTION__);
    $first = $arguments[0];
    if (!\is_string($first) && !\is_array($first))
    {
        throw new \InvalidArgumentException(sprintf(
            '%s arguments must be string or array', __FUNCTION__
        ));
    }

    if (\is_string($first))
    {
        return \implode('', $arguments);
    }

    if (\is_array($first))
    {
        return \call_user_func_array('\array_merge', $arguments);
    }
}