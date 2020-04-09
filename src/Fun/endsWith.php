<?php

namespace PFPF;

function endsWith($needle, $list)
{
    if (\is_string($needle) && \is_string($list))
    {
        $pos = \strlen($list) - \strlen($needle);
        return \strpos($list, $needle) !== false && \strpos($list, $needle) === $pos;
    }

    if (\is_array($needle) && \is_array($list))
    {
        $idx1 = \count($needle) - 1;
        $idx2 = \count($list) - 1;

        while ($idx1 >= 0)
        {
            if ($needle[$idx1--] != $list[$idx2--])
            {
                return false;
            }
        }

        return true;
    }

    return false;
}