<?php

namespace PFPF;

function dissoc(String $prop, Array $array): Array
{
    unset( $array[$prop] );
    return $array;
}