<?php

namespace PFPF;

use function PFPF\Internal\_getFuncArgNum;

function curry(callable $fn, ...$arguments)
{
    return curryN(_getFuncArgNum($fn), $fn, ...$arguments);
}