<?php

namespace App\Solution;

function reverseInt($num)
{
    $reverse = (int) strrev((string) abs($num));
    return $num > 0 ? $reverse : -$reverse;
}
