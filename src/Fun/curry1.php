<?php

namespace PFPF;

function curry1(callable $fn)
{
    return function($a) use($fn)
    {
        return $fn($a);
    };
}