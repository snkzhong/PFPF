<?php

namespace PFPF;

function tap(callable $fn, $argument)
{
    $fn($argument);
    return $argument;
}