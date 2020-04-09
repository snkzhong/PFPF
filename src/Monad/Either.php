<?php

namespace PFPF\Monad;

class Either
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function identity()
    {
        return $this->value;
    }

    public static function left($a)
    {

    }

    public static function right($a)
    {

    }

    public static function fromNullable($val)
    {
        // return is_null($val) ? ;
    }

    public static function of($a)
    {

    }

    public function map($fn)
    {

    }

    public function filter($fn)
    {

    }

    public function chain($fn)
    {

    }

    public function getOrElse($other)
    {

    }

    public function orElse($fn)
    {

    }

    public function isRight()
    {
        return true;
    }

    public function isLeft()
    {
        return false;
    }
}