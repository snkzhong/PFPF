<?php

namespace PFPF;

function drop(Int $len, $list)
{
    if (\is_string($list))
    {
        return \substr($list, $len);
    }

    if (\is_array($list) || $list instanceof \Traversable)
    {
        return \array_slice($list, $len);
    }

    throw new \InvalidArgumentException(\sprintf(
        '%s argument 2 must be string or array', __FUNCTION__
    ));
}