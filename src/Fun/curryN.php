<?php

namespace PFPF;

use function PFPF\Internal\_curryN;

function curryN($count, $fn, ...$arguments)
{
    return _curryN($count, $arguments, $fn);
}