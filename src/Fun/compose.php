<?php

namespace PFPF;

function compose(...$fns)
{
    return \array_reduce(
        \array_reverse($fns),
        function(callable $prevFn, callable $fn) {
            return function($a) use ($prevFn, $fn) {
                return $fn($prevFn($a));
            };
        },
        'PFPF\identity'
    );
}