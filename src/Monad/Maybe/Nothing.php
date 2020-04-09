<?php

namespace PFPF\Monad\Maybe;

use PFPF\Monad\Maybe;

class Nothing extends Maybe
{
    public function identity()
    {
        throw new Error("Can't extract the value of a Nothing.");
    }

    public function getOrElse($other)
    {
        return $other;
    }

    public function filter($fn)
    {
        return $this->value;
    }

    public function isNothing()
    {
        return true;
    }

    public function toString() 
    {
        return "Maybe.Nothing";
    }
}