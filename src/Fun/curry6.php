<?php

namespace PFPF;

function curry6(callable $fn, ...$arguments)
{
    return curryN(6, $fn, ...$arguments);
}