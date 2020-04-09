<?php

namespace PFPF;

function uniq($collection, $flags=SORT_REGULAR): array
{
    return \array_unique($collection, $flags);
}