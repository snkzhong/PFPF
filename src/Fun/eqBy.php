<?php

namespace PFPF;

function eqBy(callable $fn, ...$arguments)
{
    $_eqFun = function($a, $b) use ($fn) {
        return $fn($a) == $fn($b);
    };

    if (\count($arguments) == 2)
    {
        return $_eqFun($arguments[0], $arguments[1]);
    }

    return curryN(2, $_eqFun, ...$arguments);
}