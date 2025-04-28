<?php

function  sumar(int|float $a, int $b):int|float{
    return $a * $b;
}

//echo sumar(5,20);

function contar(array|null $array):int{
    return count($array ?? []);
}
echo contar([1,1,1,1,1,1,1,1,1,1,1]);
//echo contar(null);