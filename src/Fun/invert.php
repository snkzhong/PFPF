<?php

namespace PFPF;

function invert(Array $list)
{
    $resultArr = [];
    foreach($list as $k => $v)
    {
        if (!isset($resultArr[$v]))
        {
            $resultArr[$v] = $k;
            continue;
        }
        else 
        {
            if (\is_array($resultArr[$v]))
            {
                $resultArr[$v][] = $k;
            }
            else 
            {
                $resultArr[$v] = [$resultArr[$v], $k];
            }
        }
    }

    return $resultArr;
}