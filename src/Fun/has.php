<?php

namespace PFPF;

function has($prop, $arrayOrObject)
{
    if (\is_array($arrayOrObject))
    {
        return isset($arrayOrObject[$prop]);
    }
    if (\is_object($arrayOrObject))
    {
        return \property_exists($arrayOrObject, $prop);
    }

    return false;
}