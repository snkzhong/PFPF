<?php

namespace PFPF;

function times(callable $fn, int $count)
{
    return map($fn, \PFPF\range(0, $count-1));
}