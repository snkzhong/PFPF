<?php

namespace PFPF;

function curry3(callable $fn, ...$arguments)
{
    return curryN(2, $fn, ...$arguments);
}