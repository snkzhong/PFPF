<?php

namespace PFPF;

function join(String $separator, $collection)
{
    return \implode($separator, $collection);
}