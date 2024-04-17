<?php
// Variáveis ​​podem ser convertidas entre tipos, dependendo de seu uso. 
// PHP faz isso automaticamente quando necessário.
$integer = 1;
echo $integer + $integer; // => 2

$string = '1';
echo $string + $string; // => 2 (strings are coerced to integers)

$string = 'one';
// $string + $string; // => error 
// Gera 0 porque o operador + não pode converter a string 'one' em um número 

// Você pode converter explicitamente tipos de variáveis
$boolean = (bool) 1; // => true
$zero = 0;
$boolean = (bool) $zero; // => false

// Existem também funções dedicadas para converter a maioria dos tipos
$integer = 5;
$string = strval($integer);
echo gettype($string); // => string
echo $string; // => '5'
