<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function without($collectionA, $collectionB)
{
    InvalidArgumentException::assertCollection($collectionA, __FUNCTION__, 1);
    InvalidArgumentException::assertCollection($collectionB, __FUNCTION__, 2);
    
    $resultArr = [];
    foreach($collectionB as $it)
    {
        if (!in_array($it, $collectionA))
        {
            $resultArr[] = $it;
        }
    }
    
    return $resultArr;
}
