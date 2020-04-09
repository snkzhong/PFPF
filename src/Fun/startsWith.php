<?php

namespace PFPF;

function startsWith($needle, $list): bool
{
    if (\is_string($needle) && \is_string($list))
    {
        $pos = \strlen($list) - \strlen($needle);
        return \strpos($list, $needle) !== false && \strpos($list, $needle) === 0;
    }

    if (\is_array($needle) && \is_array($list))
    {
        $idx = 0;
        $len = \count($needle) - 1;
        while ($idx <= $len)
        {
            if ($needle[$idx] != $list[$idx])
            {
                return false;
            }
            $idx++;
        }

        return true;
    }

    return false;
}