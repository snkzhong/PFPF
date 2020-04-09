<?php

namespace PFPF;

function unless(callable $predicate, callable $whenFalse, $argument)
{
    if (!$predicate($argument))
    {
        return $whenFalse($argument);
    }
    
    return $argument;
}