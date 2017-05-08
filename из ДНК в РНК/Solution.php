<?php
/*
Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает
соответствующую цепь РНК (совершает транскрипцию РНК).
*/
namespace App\Solution;


function toRna($str1)
{
    $result = '';
    for($i = 0; $i < strlen($str1); $i++) {
        if($str1[$i] == 'G') {
            $result .= 'C';
        }
        elseif($str1[$i] == 'C') {
            $result .= 'G';
        }
        elseif($str1[$i] == 'T') {
            $result .= 'A';
        }
        else{
            $result .= 'U';
        }

    }
    return $result;
}

/* === Второй вариант ===
function toRna($nucleotide)
{
    $map = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U'
    ];

    $length = strlen($nucleotide);

    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[]= $map[$nucleotide[$i]];
    }

    return implode('', $result);
}
*/
