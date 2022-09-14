<?php

function factorial($n)
{
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}


assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);

