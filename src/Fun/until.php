<?php

namespace PFPF;

function until(callable $pred, callable $iteratorFn, $initVal)
{
    $val = $initVal;
    while (!$pred($val))
    {
        $val = $iteratorFn($val);
    }

    return $val;
}