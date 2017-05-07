<?php
/*
  Реализуйте функцию multiArgs, которая возвращает произведение
  всех переданных аргументов. Вызванная без аргументов, должна вернуть null
*/
namespace App\Solution;

function multiArgs(...$numbers)
{
    $result = 1;
    if (empty($numbers)) {
        return null;
    }
    foreach ($numbers as $value) {
        $result *= $value;
    }
    return $result;
}
/* === Второй вариант ===
  * if (empty($numbers)) {
  *        return null;
  *    }
  *    return array_product($numbers);
*/
