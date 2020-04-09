<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function prepend($element, $collection)
{
    InvalidArgumentException::assertCollection($collection, __FUNCTION__, 2);

    \array_unshift($collection, $element);
    return $collection;
}