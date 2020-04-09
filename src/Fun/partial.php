<?php

namespace PFPF;

use function PFPF\Internal\_getFuncArgNum;

function partial(callable $fn, ...$arguments)
{
    $count = _getFuncArgNum($fn);
    return curryN($count, $fn, ...$arguments);
}