<?php

namespace PFPF\Internal;

use PFPF\Exception\InvalidArgumentException;

function _isCollection($collection)
{
    return \is_array($collection) || $collection instanceof \Traversable;
}