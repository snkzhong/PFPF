<?php

namespace PFPF;

use function PFPF\Internal\_isCollection;

function toPairs($collectionOrObject)
{
    $pairs = [];
    if (_isCollection($collectionOrObject))
    {
        foreach($collectionOrObject as $k => $v)
        {
            $pairs[] = [$k, $v];
        }
    }
    else if (is_object($collectionOrObject))
    {
        $arr = \get_object_vars($collectionOrObject);
        foreach($arr as $k => $v)
        {
            $pairs[] = [$k, $v];
        }
    }

    return $pairs;
}