<?php

namespace PFPF;

use function PFPF\Internal\_genFuncHashCode;
use function PFPF\Internal\_getFuncArgNum;

function once(callable $fn)
{
    static $cache = [];

    $argNum = _getFuncArgNum($fn);

    return curryN($argNum, function(...$arguments) use ($fn, &$cache) {
        $key = _genFuncHashCode($fn, $arguments);
        if (!isset($cache[$key]))
        {
            $cache[$key] = $fn(...$arguments);
        }
        // else 
        // {
        //     echo 'fetch from cache: '.$key.PHP_EOL;
        // }

        return $cache[$key];
    });
}