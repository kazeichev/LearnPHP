<?php
/*
  Реализуйте функцию isPowerOfThree которая определяет, является 
  ли переданное число натуральной степенью тройки. Например число 27
  это третья степень (3^3), а 81 это четвертая (3^4).
*/

namespace App\Solution;

function isPowerOfThree($number)
{
    if ($number == 1) {
        return true;
    }
    $res = $number / 3;
    if ($res == 1) {
        return true;
    }
    elseif ($res >= 3) {
        return isPowerOfThree($res);
    }
    else {
        return false;
    }
}

/* === Второй способ ===
function isPowerOfThree($num)
{
    $current = 1;
    while ($current <= $num) {
        if ($current == $num) {
            return true;
        }
        $current *= 3;
    }

    return false;
}
*/
