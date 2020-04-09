<?php

namespace PFPF;

use function PFPF\Internal\_isCollection;

function propEq($name, $val, $collectionOrObject): Bool
{
    if (_isCollection($collectionOrObject))
    {
        return isset($collectionOrObject[$name]) ? $collectionOrObject[$name] == $val : false;
    }
    if (\is_object($collectionOrObject))
    {
        return \property_exists($collectionOrObject, $name) ? $collectionOrObject->$name == $val : false;
    }

    return false;
}
