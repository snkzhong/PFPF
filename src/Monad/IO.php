<?php

namespace PFPF\Monad;

final class IO
{
    private $effect;

    public function __construct($effect)
    {
        $this->effect = $effect;
    }

    public static function of($a)
    {
        return new IO( function() use($a) { return $a; } );
    }

    public static function from($fn)
    {
        return new IO( $fn );
    }

    public function map($fn)
    {
        return IO.of( $fn($this->effect) );
    }

    public function chain($fn)
    {
        return $fn($this->effect);
    }

    public function run()
    {
        return $this->effect();
    }
}