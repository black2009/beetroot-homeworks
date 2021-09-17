<?php

// numbers spiral

$n = $argv[1];

for ($y = 0; $y < $n; $y++) {
    for ($x = 0; $x < $n; $x++) {
        printf("% 2d ", f($n, $n, $x, $y));
    }

    echo "\n";
}

function f($w, $h, $x, $y)
{
    return ($y)
        ? $w + f($h - 1, $w, $y - 1, $w - $x - 1) //strip-off first row and "rotate"
        : $x;
}