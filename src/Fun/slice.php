<?php

namespace PFPF;

use function PFPF\Internal\_isCollection;

function slice(Int $start, Int $length, $list)
{
    if (\is_string($list))
    {
        return \substr($list, $start, $length);
    }
    if (_isCollection($list))
    {
        return array_slice($list, $start, $length);
    }
}