<?php

namespace PFPF\Internal;

function _arity($count, callable $fn)
{
    switch ($count) 
    {
        case 0:
            return function() { return $fn(); };
        case 1:
            return function($a0) { return $fn($a0); };
        case 2:
            return function($a0, $a1) { return $fn($a0, $a1); };
        case 3:
            return function($a0, $a1, $a2) { return $fn($a0, $a1, $a2); };
        case 4:
            return function($a0, $a1, $a2, $a3) { return $fn($a0, $a1, $a2, $a3); };
        case 5:
            return function($a0, $a1, $a2, $a3, $a4) { return $fn($a0, $a1, $a2, $a3, $a4); };
        case 6:
            return function($a0, $a1, $a2, $a3, $a4, $a5) { return $fn($a0, $a1, $a2, $a3, $a4, $a5); };
        case 7:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6); };
        case 8:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7); };
        case 9:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8); };
        case 10:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9); };
        case 11:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10); };
        case 12:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11); };
        case 13:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12); };
        case 14:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13); };
        case 15:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14); };
        case 16:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15); };
        case 17:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16); };
        case 18:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17); };
        case 19:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18); };
        case 20:
            return function($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19) { return $fn($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19); };

        default:
            throw new Exception("First argument to _arity must no greater than 20", 1);
            
    }
}