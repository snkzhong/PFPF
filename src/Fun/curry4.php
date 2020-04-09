<?php

namespace PFPF;

function curry4(callable $fn, ...$arguments)
{
    return curryN(4, $fn, ...$arguments);
}