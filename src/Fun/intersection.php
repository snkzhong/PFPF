<?php

namespace PFPF;

function intersection($collectionA, $collectionB)
{
    $resultArr = [];
    foreach($collectionA as $k => $it)
    {
        if (\in_array($it, $collectionB))
        {
            if (\is_string($k))
            {
                $resultArr[$k] = $it;
            }
            else 
            {
                $resultArr[] = $it;
            }
        }
    }

    return $resultArr;
}