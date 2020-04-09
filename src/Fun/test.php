<?php

namespace PFPF;

function test(string $regexp, string $str): bool
{
    return \preg_match($regexp, $str);
}