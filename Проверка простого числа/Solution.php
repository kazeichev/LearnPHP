<?php
/*
Реализуйте функцию isPrime определяющую, является ли число простым.
*/
namespace App\Solution;

function isPrime($num)
{
  if($num < 2) {
    return false;
  }

  $i = 2;

  while ($i <= $num / 2) {
    if($num % $i === 0) {
      return false;
    }
    $i++;
  }

  return true;
};
