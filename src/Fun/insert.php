<?php

namespace PFPF;

function insert(Int $position, $element, $collection)
{
    \array_splice($collection, $position, 0, $element);
    return $collection;
}