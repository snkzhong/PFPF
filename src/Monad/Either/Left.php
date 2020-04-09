<?php

namespace PFPF\Monad\Either;

use PFPF\Monad\Either;

final class Left extends Either
{
    public function map($_)
    {
        return $this;
    }

    public function getOrElse($other)
    {
        return $other;
    }

    public function orElse($fn)
    {
        return $fn($this->value);
    }

    public function chain($fn)
    {
        return $this;
    }

    public function filter($fn)
    {
        return $this;
    }

    public function isRight()
    {
        return false;
    }

    public function isLeft()
    {
        return true;
    }

    public function toString()
    {
        return "Either.Left({$this->value})";
    }
}