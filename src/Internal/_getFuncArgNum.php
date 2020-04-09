<?php

namespace PFPF\Internal;

use ReflectionMethod;
use ReflectionFunction;

function _getFuncArgNum(callable $fn)
{
    $reflection = '';
    if ( \is_string($fn) && \strpos($fn, '::') !== false )
    {
        $reflection = $reflection = new ReflectionMethod($fn);
    }
    else if (\is_array($fn) && \count($fn) >= 2)
    {
        $reflection = $reflection = new ReflectionMethod($fn[0], $fn[1]);
    }
    elseif (\is_object($fn) && \method_exists($fn, '__invoke')) 
    {
        $reflection = new ReflectionMethod($fn, '__invoke');
    }
    else {
        $reflection = new ReflectionFunction($fn);
    }

    return $reflection->getNumberOfParameters();
}