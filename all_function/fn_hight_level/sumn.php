<?php

//Написать рекурсивную функцию sumn рассчета суммы 1 + 2 + 3 + ... + n.
//assert(sumn(2) == 3);
//assert(sumn(3) == 6);
// Напишите еще несколько проверок


function sumn(int $num): int
{
    if ($num <= 1) return 1;
    return $num + sumn($num - 1);
}

assert(sumn(2) == 3);
assert(sumn(3) == 6);
assert(sumn(4) == 10);
assert(sumn(5) == 15);
assert(sumn(6) == 21);
assert(sumn(7) == 28);

