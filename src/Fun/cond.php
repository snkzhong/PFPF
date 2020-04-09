<?php

namespace PFPF;

function cond(Array $pairs, ...$argList)
{
    foreach($pairs as $pair)
    {
        $fn = $pair[0];
        if ($fn(...$argList))
        {
            return $pair[1];
        }
    }

    return null;
}