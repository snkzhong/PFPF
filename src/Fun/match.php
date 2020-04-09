<?php

namespace PFPF;

function match(String $regexp, String $str): Bool
{
    return \preg_match($regexp, $str);
}