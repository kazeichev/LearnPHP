<?php
/*
Вес Хэмминга это количество единиц в двоичном представлении числа.
*/
namespace App\Solution;


function hammingWeight($num)
{
    $div = decbin($num);
    $strArr = array_sum(str_split($div));
    return $strArr;
}

/* ===Второй вариант===
function hammingWeight($num)
{
    $weight = 0;
    $digits = str_split(decbin($num));
    foreach ($digits as $value) {
        if ($value == '1') {
            $weight++;
        }
    }

 

*/
