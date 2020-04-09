<?php

namespace PFPF;

function both(callable $fn1, callable $fn2, ...$arguments)
{
    if ($fn1(...$arguments) && $fn2(...$arguments))
    {
        return true;
    }

    return false;
}