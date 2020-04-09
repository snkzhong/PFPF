<?php

namespace PFPF;

function dropLast(Int $len, $list)
{
    if (\is_string($list))
    {
        return \substr($list, 0, \strlen($list)-$len);
    }

    if (\is_array($list) || $list instanceof \Traversable)
    {
        return \array_slice($list, 0, \count($list)-$len);
    }

    throw new \InvalidArgumentException(\sprintf(
        '%s argument 2 must be string or array', __FUNCTION__
    ));
}