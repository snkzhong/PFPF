<?php

namespace PFPF;

function mymatch(String $regexp, String $str): Bool
{
    return \preg_match($regexp, $str);
}