<?php

namespace PFPF\Internal;

function _arityCall(callable $fn, Array $arguments)
{
    $argLen = \count($arguments);
    switch($argLen)
    {
        case 0:
            return $fn();
        case 1:
            list($a0) = $arguments;
            return $fn($a0);
        case 2:
            list($a0, $a1) = $arguments;
            return $fn($a0, $a1);
        case 3:
            list($a0, $a1, $a2) = $arguments;
            return $fn($a0, $a1, $a2);
        case 4:
            list($a0, $a1, $a2, $a3) = $arguments;
            return $fn($a0, $a1, $a2, $a3);
        case 5:
            list($a0, $a1, $a2, $a3, $a4) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4);
        case 6:
            list($a0, $a1, $a2, $a3, $a4, $a5) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5);
        case 7:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6);
        case 8:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7);
        case 9:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8);
        case 10:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9);
        case 11:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10);
        case 12:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11);
        case 13:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12);
        case 14:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13);
        case 15:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14);
        case 16:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15);
        case 17:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16);
        case 18:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17);
        case 19:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18);
        case 20:
            list($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19) = $arguments;
            return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19);
        default:
            throw new Exception("argument count must no greater than 20", 1);
    }
}