<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function last($list)
{
    InvalidArgumentException::assertStringOrCollection($list, __FUNCTION__, 1);
    
    if (\is_string($list))
    {
        return \substr($list, strlen($list)-1);
    }
    if (\is_array($list) || $list instanceof \Traversable)
    {
        return $list[count($list)-1];
    }
}