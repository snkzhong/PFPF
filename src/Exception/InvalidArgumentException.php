<?php

namespace PFPF\Exception;

class InvalidArgumentException
{
    public static function assertCallback($fn, $callee, $argumentPosition)
    {
        if (!\is_callable($fn))
        {
            $message = sprintf(
                '%s argument %d should be callable, but %s given', 
                $callee, 
                $argumentPosition, 
                self::gettype($fn)
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertCollection($collection, $callee, $argumentPosition)
    {
        if ( !(\is_array($collection) || $collection instanceof \Iterator) )
        {
            $message = sprintf(
                '%s argument %d should be Array or instanceof Iterator, but %s given', 
                $callee, 
                $argumentPosition, 
                self::gettype($collection)
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertNumeric($val, $callee, $argumentPosition)
    {
        if (!\is_numeric($val))
        {
            $message = sprintf(
                '%s argument %d should be numeric, but %s given', 
                $callee, 
                $argumentPosition, 
                self::gettype($val)
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertNumericOrBool($val, $callee, $argumentPosition)
    {
        if (!\is_numeric($val) && !\is_bool($val))
        {
            $message = sprintf(
                '%s argument %d should be numeric or bool, but %s given', 
                $callee, 
                $argumentPosition, 
                self::gettype($val)
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertArgumentCount(Int $leastNum, Int $actualNum, $callee)
    {
        if ($actualNum < $leastNum)
        {
            $message = sprintf(
                '%s at least %d arguments are required, but %d given',
                $callee,
                $leastNum,
                $actualNum
            );
        }
        throw new \InvalidArgumentException($message);
    }

    public static function assertArrayCount(Int $leastNum, $actualNum, $callee)
    {
        if ($actualNum < $leastNum)
        {
            $message = sprintf(
                '%s at least %d arguments are required, but %d given',
                $callee,
                $leastNum,
                $actualNum
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertSameType(Array $arguments, $callee)
    {
        $type = self::getType($arguments[0]);
        $fn = function($val) use($type) {
            return self::getType($val) == $type;
        };

        if (!\PFPF\all($fn, $arguments))
        {
            $message = sprintf(
                '%s arguments must be same type',
                $callee
            );
        }
    }

    public static function assertStringOrCollection($val, $callee, $argumentPosition)
    {
        if ( !\is_string($val) && !\is_array($val) && !($val instanceof Traversable) )
        {
            $message = sprintf(
                '%s argument %d should be string or collection, but %s given', 
                $callee, 
                $argumentPosition, 
                self::gettype($val)
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertExpectantTypes($val, $types, $callee, $argumentPosition)
    {
        if ( !\PFPF\any('InvalidArgumentException::getType', $types)($val) )
        {
            $message = sprintf(
                '%s argument %d should be [%s], but %s given', 
                $callee, 
                $argumentPosition,
                \implode(',',$types),
                self::gettype($val)
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function assertArrayIndexSafe($collection, $index, $callee, $argumentPosition)
    {
        if (!isset($collection[$index]))
        {
            $message = sprintf(
                '%s argument %d undefined array offset %d',
                $callee,
                $argumentPosition,
                $index
            );
            throw new \InvalidArgumentException($message);
        }
    }

    public static function getType($val)
    {
        if (\is_callable($val))
        {
            return 'function';
        }
        else 
        {
            return \is_object($val) ? \get_class($val) : \gettype($val);
        }
    }
}