<?php

namespace PFPF;

function curry5(callable $fn, ...$arguments)
{
    return curryN(5, $fn, ...$arguments);
}