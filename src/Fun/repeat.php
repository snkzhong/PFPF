<?php

namespace PFPF;

function repeat($val, Int $num): Array
{
    $resultArr = [];
    for ($i=0; $i<$num; $i++)
    {
        $resultArr[] = $val;
    }

    return $resultArr;
}