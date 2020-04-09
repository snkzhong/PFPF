<?php

namespace PFPF;

use function PFPF\Internal\_isCollection;

function splitAt(int $index, $list)
{
    if (\is_string($list))
    {
        return [\substr($list, 0, $index), \substr($list, $index)];
    }
    if (_isCollection($list))
    {
        return [\array_slice($list, 0, $index), \array_slice($list, $index)];
    }
}