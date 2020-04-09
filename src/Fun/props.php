<?php

namespace PFPF;

function props(Array $names, $collectionOrObject)
{
    return map(partial('\PFPF\prop', _, $collectionOrObject), $names);
}