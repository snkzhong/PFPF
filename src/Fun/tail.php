<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function tail($collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    $resultCollection = [];
    foreach($collection as $index => $it)
    {
        if ($index == 0) continue;

        $resultCollection[] = $it;
    }

    return $resultCollection;
}