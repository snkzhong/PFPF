<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function dropRepeats($collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 1);

    $resultCollection = [];
    foreach ($collection as $k => $it)
    {
        if (!\in_array($it, $resultCollection))
        {
            if (\is_string($k))
            {
                $resultCollection[$k] = $it;
            }
            else 
            {
                $resultCollection[] = $it;
            }
        }
    }

    return $resultCollection;
}