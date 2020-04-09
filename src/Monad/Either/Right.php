<?php

namespace PFPF\Monad\Either;

use PFPF\Monad\Either;

class Right extends Either
{
    public function map($fn)
    {
        return Either::of( $fn($this->value) );
    }

    public function getOrElse($other)
    {
        return $this->value;
    }

    public function orElse($fn)
    {
        return $this;
    }

    public function chain($fn)
    {
        return $fn($this->value);
    }

    public function filter($fn)
    {
        return Either::fromNullable( $fn($this->value) ? $this->value : null );
    }

    public function isRight()
    {
        return true;
    }

    public function isLeft()
    {
        return false;
    }

    public function toString()
    {
        return "Either.Right({$this->value})";
    }
}