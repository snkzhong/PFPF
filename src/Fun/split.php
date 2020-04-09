<?php

namespace PFPF;

function split(string $pattern, string $str, int $flags = PREG_SPLIT_NO_EMPTY): array
{
    return \preg_split($pattern, $str, -1, $flags);
}