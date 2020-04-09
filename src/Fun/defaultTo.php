<?php

namespace PFPF;

function defaultTo($val, $otherwise)
{
    return ($otherwise == false || $otherwise === null || $otherwise === '') ? $val : $otherwise;
}