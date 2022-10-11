<?php

//function computeTax(array $products, int $percent, int $decimalPrecision = 0): array
//{
//    return array_map(function ($product) use ($percent, $decimalPrecision) {
//        return round($product + $product * $percent / 100, $decimalPrecision);
//    }, $products);
//}
//
//function myMap(callable $myFn, array $items): array
//{
//    foreach ($items as $item) {
//        $myFn($item);
//    }
//
//    return $items;
//}
//
//$products = ['milk' => 3.55, 'butter' => 2.5, 'eggs' => 0.5];

//$result = computeTax(products: $products, percent: 20);
//var_dump($result === ["milk" => 4.26, "butter" => 3.0, "eggs" => 0.6]);
//
//$result = computeTax(products: $products, percent: 20, decimalPrecision: 1);
//var_dump($result === ["milk" => 4.3, "butter" => 3.0, "eggs" => 0.6]);
//
//$result = computeTax(products: $products, percent: 20, decimalPrecision: 0);
//var_dump($result === ["milk" => 4.0, "butter" => 3.0, "eggs" => 1.0]);













// Créez une fonction permettant de regrouper terme à terme les éléments de deux tableaux de dimension 1.
// Elle retournera un tableau de dimension 2 regroupant les éléments.

function split_array(array $numbers, int $length, bool $preserveKeys = false): array
{
    if ($length < 0) {
        $length = count($numbers) - abs($length);
    }

    if ($length > count($numbers) || $length === 0) {
        return [$numbers, []];
    }

    if ($length < 0) {
        return [[], $numbers];
    }

    [$left, $right] = [[], []];
    $i = 0;
    foreach ($numbers as $key => $value) {
        if ($preserveKeys) {
            // Voir conditions ternaires
            $i < $length ? $left[$key] = $value : $right[$key] = $value;
        } else {
            $i < $length ? $left[] = $value : $right[] = $value;
        }

        $i++;
    }

    return [$left, $right];
}

//$result = split_array(numbers: [4,6,9,17], length : -20);
//var_dump($result === [[], [4,6, 9, 17]]);
//
//$result = split_array(numbers: [4,6,9,17], length : -4);
//var_dump($result === [[4,6, 9, 17], []]);
//
//$result = split_array(numbers: [4,6,9,17], length : 0);
//var_dump($result === [[4,6, 9,17], []]);
//
//$result = split_array(numbers: [2 => 4, 3 => 6], length : 1);
//var_dump($result === [[0 => 4], [0 => 6]]);
//
//$result = split_array(numbers: ['foo' => 4, 3 => 6], length : 1, preserveKeys: true);
//var_dump($result === [['foo' => 4], [3 => 6]]);
//
//
//// Pour les nombres de 1 à 100 compris.
//
//    Pour les multiples de 3, affichez Fizz au lieu du nombre.
//    Pour les multiples de 5, affichez Buzz au lieu du nombre.
//    Pour les nombres multiples de 3 et 5, affichez uniquement FizzBuzz.
//    Dans les autres cas le nombre lui-même.


function fizzBuzz(int $number) {
    if(!($number %3)){
        return $result = 'Fizz';
    }
    if(!($number %5)){
        return $result = 'Buzz';
    }
    if(!($number %3 ) && !($number %5)){
        return $result = 'FizzBuzz';
    }
        return $number;


}

$result = fizzBuzz(9);
var_dump($result === 'Fizz');

$result = fizzBuzz(25);
var_dump($result === 'Buzz');

$result = fizzBuzz(15);
var_dump($result === 'FizzBuzz');

$result = fizzBuzz(1);
var_dump($result === 1);

