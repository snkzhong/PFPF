<?php

namespace PFPF;

use PFPF\Exception\InvalidArgumentException;

function lastIndexOf($need, $list)
{
    InvalidArgumentException::assertStringOrCollection($list, __FUNCTION__, 1);

    if (\is_string($list))
    {
        $idx = \strlen($list)-1;
        while($idx >= 0)
        {
            if (\substr($list, $idx, 1) == $need)
            {
                return $idx;
            }

            $idx--;
        }
    }
    else 
    {
        $idx = \count($list)-1;
        while($idx >= 0)
        {
            if ($list[$idx] == $need)
            {
                return $idx;
            }
            $idx--;
        }
    }

    return -1;
}