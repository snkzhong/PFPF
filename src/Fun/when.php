<?php

namespace PFPF;

function when(callable $pred, callable $whenTrueFn, $argument)
{
    return $pred($argument) ? $whenTrueFn($argument) : $argument;
}
