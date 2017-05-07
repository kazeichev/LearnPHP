<?php
/*
  * Реализуйте функцию compact которая принимает на вход массив и
  * возвращает новый, полученный удалением элементов со значением null.
  * Ключи оставшихся элементов (тех которые не были null) должны сохраняться.
*/
namespace App\Solution;

function compact(array $array)
{
    $result = [];
    foreach ($array as $key => $keys) {
        if (is_null($keys)) {
            continue;
        }
        $result[$key] = $keys;
    }
    return $result;
}
