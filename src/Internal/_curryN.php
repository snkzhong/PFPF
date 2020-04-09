<?php

namespace PFPF\Internal;

function _curryN($count, $received, $fn)
{
    return function(...$arguments) use ($count, $received, $fn)
    {
        $combined = [];
        $argsIdx = 0;
        $combinedIdx = 0;
        $left = $count;
        $receivedLen = \count($received);
        $argumentsLen = \count($arguments);

        while ($combinedIdx < $receivedLen || $argsIdx < $argumentsLen)
        {
            $argument = null;
            if ( $combinedIdx < $receivedLen && (!_isPlaceholder($received[$combinedIdx]) || $argsIdx >= $argumentsLen) )
            {
                $argument = $received[$combinedIdx];
            }
            else 
            {
                $argument = $arguments[$argsIdx];
                $argsIdx++;
            }
            $combined[$combinedIdx++] = $argument;
            if (!_isPlaceholder($argument))
            {
                $left--;
            }
        }
        
        return $left <= 0 
        ? $fn(...$combined)
        : _arityN(_curryN($count, $combined, $fn));
    };
}