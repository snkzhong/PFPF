<?php

namespace PFPF;

function contains($needle, $list)
{
    if (\is_string($list))
    {
        return \strpos($list, $needle) !== false;
    }
    if (\is_array($list))
    {
        return \in_array($needle, $list);
    }

    throw new \InvalidArgumentException(sprintf(
        '%s argument 2 must be string or array', __FUNCTION__
    ));
}