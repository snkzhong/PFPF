<?php

namespace PFPF;

function curry2(callable $fn, ...$arguments)
{
    return curryN(2, $fn, ...$arguments);
}