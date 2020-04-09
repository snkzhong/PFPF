<?php

namespace PFPF;

function nth(Int $offset, $list)
{
    if (\is_string($list))
    {
        return \substr($list, $offset, 1);
    }

    if (\is_array($list) || $list instanceof \Traversable)
    {
        return $list[$offset];
    }
}