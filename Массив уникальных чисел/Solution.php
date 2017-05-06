<?php
/*
Реализуйте функцию uniq, которая принимает, как
аргумент, массив, и возвращает массив, в
котором оставлены только уникальные значения из
исходного массива.
*/
namespace App\Solution;

function uniq(array $arr)
{
    $result = [];
    for ($i = 0; $i < sizeof($arr); $i++) {
        if (in_array($arr[$i], $result)) {
            continue;
        }
        $result[] = $arr[$i];
    }

    return $result;
}
