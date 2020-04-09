<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function flatten($collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 1);

    $resultArr = [];
    foreach($collection as $k=>$v)
    {
        if (is_array($v))
        {
            $resultArr = array_merge($resultArr, flatten($v));
        }
        else 
        {
            if (\is_int($k))
            {
                $resultArr[] = $v;
            }
            else 
            {
                $resultArr[$k] = $v;
            }
        }
    }

    return $resultArr;
}