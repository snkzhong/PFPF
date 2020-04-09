<?php

namespace PFPF\Internal;

function _either(Array $fns, Array $arguments): Bool
{
    foreach($fns as $fn)
    {
        if (_arityCall($fn, $arguments)) 
        {
            return true;
        }
    }

    return false;
}