<?php

namespace PFPF\Monad;

class Functor
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public static function of($value)
    {
        return new Functor($value);
    }

    public function identity()
    {
        return $this->value;
    }

    public function map($fn)
    {
        return static::of($fn($this->value));
    }

    public function join()
    {
        if ($this->value instanceof Functor)
        {
            return $this->value->join();
        }

        return $this;
    }
}