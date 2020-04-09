<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function foldr(callable $fn, $acc, $collection)
{
    return reduceRight($fn, $acc, $collection);
}