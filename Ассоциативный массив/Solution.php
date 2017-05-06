<?php
/*
  Реализуйте функцию wordsCount, которая считает
  количество одинаковых слов в предложении.
  Результатом функции является ассоциативный массив,
  в ключах которого слова из исходного текста, а значения
  это количество повторений.
*/
namespace App\Solution;

function wordsCount($string)
{
    $result = [];
    $words = explode(' ', trim($string));

    foreach ($words as $word) {
        $tWord = trim($word);
        if (!empty($tWord)) {
            if (isset($result[$tWord])) {
                $result[$tWord]++;
            } else {
                $result[$tWord] = 1;
            }
        }
    }

    return $result;
}
