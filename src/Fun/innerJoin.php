<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function innerJoin(callable $fn, $xList, $yList)
{
    InvalidArgumentException::assertCollection($xList, __FUNCTION__, 2);
    InvalidArgumentException::assertCollection($yList, __FUNCTION__, 3);

    $resultArr = [];
    foreach($xList as $idx => $xItem)
    {
        foreach($yList as $yItem)
        {
            if ( $fn($xItem, $yItem) )
            {
                if (\is_string($idx))
                {
                    $resultArr[$idx] = $xItem;
                }
                else 
                {
                    $resultArr[] = $xItem;
                }
                break;
            }
        }
    }

    return $resultArr;
}