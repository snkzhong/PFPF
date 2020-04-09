<?php

namespace PFPF;

use function PFPF\Internal\_getFuncArgNum;

function apply(callable $fn, ...$arguments)
{
    $funArgumentNum = _getFuncArgNum($fn);    
    $arguments = \array_slice($arguments, 0, $funArgumentNum);

    return curryN($funArgumentNum, $fn, ...$arguments);
}