<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function foldl(callable $fn, $acc, $collection)
{
    return reduce($fn, $acc, $collection);
}