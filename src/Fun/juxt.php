<?php

namespace PFPF;

use function PFPF\Internal\_arityCall;

function juxt(Array $fns, Array $list): Array
{
    $resultArr = [];
    foreach($fns as $fn)
    {
        $resultArr[] = $fn($list);
    }

    return $resultArr;
}