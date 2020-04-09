<?php

namespace PFPF;

function union($collectionA, $collectionB)
{
    return uniq( merge($collectionA, $collectionB) );
}