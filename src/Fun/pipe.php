<?php

namespace PFPF;

use function PFPF\Internal\_getFuncArgNum;

function pipe(Int $argNum, ...$fns)
{
    $_pipe = function(callable $acc, callable $f)
    {
        return function(...$arguments) use ($acc, $f)
        {
            return $f( $acc(...$arguments) );
        };
    };
    
    return curryN($argNum, reduce($_pipe, $fns[0], tail($fns)) );
}