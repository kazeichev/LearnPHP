<?php
/*
  Дано неотрицательное целое число num.
  Итеративно сложите все входящие в него
  цифры до тех пор, пока не останется одна цифра.
*/
namespace App\Solution;

function addDigits($number)
{
    $strArr = array_sum(str_split($number));
    if ($strArr > 9) {
        return addDigits($strArr);
    }
    return $strArr;
}

/* === Второй вариант ===
function addDigits($num)
{
    if ($num < 10) {
        return $num;
    }
    $result = $num;
    while ($result >= 10) {
        $result = array_sum(str_split((string) $result));
    }

    return $result;
}
*/
