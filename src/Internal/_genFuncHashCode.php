<?php

namespace PFPF\Internal;

function _genFuncHashCode(callable $fn, Array $arguments)
{
    $elements = [];
    $elements = \array_merge($elements, [$fn], $arguments);
    return _genFuncHashCode_($elements);
}

function _genFuncHashCode_(Array $elements)
{
    $code = '';
    foreach($elements as $it)
    {
        switch(\gettype($it))
        {
            case 'array':
                $code .= _genFuncHashCode_($it);
                break;
            case 'object':
                $code .= \get_class($it) .':'. \spl_object_hash($it);
                break;
            default:
                $code .= ':'. (string) $it;
                break;
        }
    }

    return $code;
}