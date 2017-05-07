<?php
/*
  Реализуйте функцию compareVersion, которая сравнивает переданные версии 
  version1 и version2. Если version1 > version2, то функция должна вернуть 1,
  если наоборот то -1, в противном случае 0.
*/
namespace App\Solution;

function compareVersion($version1, $version2)
{
    $arrVer1 = explode('.', $version1);
    $arrVer2 = explode('.', $version2);
    if ($arrVer1[0] > $arrVer2[0] || $arrVer1[1] > $arrVer2[1] ) {
        return 1;
    } elseif ($arrVer1[0] < $arrVer2[0] || $arrVer1[1] < $arrVer2[1] ) {
        return -1;
    } else {
        return 0;
    }
}
