<?php

namespace PFPF\Monad\Maybe;

use PFPF\Monad\Maybe;

class Just extends Maybe
{
    public function map($fn)
    {
        return static::fromNullable( $fn($this->value) );
    }

    public function chain($fn)
    {
        return $fn($this->value);
    }

    public function filter($fn)
    {
        return static::fromNullable( $fn($this->value) ? $this->value : null );
    }

    public function isJust()
    {
        return true;
    }

    public function toString()
    {
        return "Maybe.Just({$this->value})";
    }
}