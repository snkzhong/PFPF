<?php

namespace PFPF\Monad;

use PFPF\Monad\Maybe\Just;
use PFPF\Monad\Maybe\Nothing;

class Maybe
{
    protected $value;

    protected function __construct($value)
    {
        $this->value = $value;
    }

    public function identity()
    {
        return $this->value;
    }

    public static function just($a)
    {
        return Just($a);
    }

    public static function nothing()
    {
        return Nothing();
    }

    public static function fromNullable($a)
    {
        return is_null($a) ? self::nothing($a) : self::just($a);
    }

    public static function of($a)
    {
        return self::just($a);
    }

    public function isNothing()
    {
        return false;
    }

    public function isJust()
    {
        return false;
    }

    public function map($fn)
    {
        return $this;
    }

    public function chain($fn)
    {
        return $this;
    }

    public function filter($fn)
    {
        return $this;
    }

    public function getOrElse()
    {
        return $this->value;
    }
}