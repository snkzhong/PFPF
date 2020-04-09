<?php

namespace PFPF;

use function PFPF\Internal\_getFuncArgNum;

function ifElse(callable $fn, callable $onTrueFun, callable $onFalseFun)
{
    $argNum = _getFuncArgNum($fn);

    return curryN($argNum, function(...$arguments) use($fn, $onTrueFun, $onFalseFun, $argNum) {
        if ($fn(...$arguments))
        {
            return $onTrueFun(...$arguments);
        }
        else 
        {
            return $onFalseFun(...$arguments);
        }
    });
}