<?php

namespace PFPF;

use function PFPF\Internal\_isCollection;
use function PFPF\join;

function reverse($list)
{
    if (\is_string($list))
    {
        return join('', \array_reverse(\str_split($list)));
    }
    if (_isCollection($list))
    {
        return \array_reverse($list);
    }

    return $list;
}