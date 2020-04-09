<?php

namespace PFPF;

function invertObj(Array $list)
{
    $resultArr = [];
    foreach($list as $k => $v)
    {
        $resultArr[$v] = $k;
    }

    return $resultArr;
}