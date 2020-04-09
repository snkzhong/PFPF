<?php

namespace PFPF;

use function PFPF\Internal\_isCollection;

function prop($name, $collectionOrObject)
{
    if (_isCollection($collectionOrObject))
    {
        return isset($collectionOrObject[$name]) ? $collectionOrObject[$name] : null;
    }
    if (\is_object($collectionOrObject))
    {
        return \property_exists($collectionOrObject, $name) ? $collectionOrObject->$name : null;
    }

    return null;
}