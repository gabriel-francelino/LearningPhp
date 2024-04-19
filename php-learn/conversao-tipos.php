<?php
/*
Variáveis ​​podem ser convertidas entre tipos, dependendo de seu uso. 
PHP faz isso automaticamente quando necessário.
*/

echo 1 + 1, "\n"; // => 2
echo 1 + "1", "\n"; // => 2
echo "1" + 1, "\n"; // => 2
echo "1" + "1", "\n"; // => 2

// echo "str" + "str", "\n"; // => 0 para versoes do PHP < 7.4
// echo "10 dolares" + "101 dalmatas", "\n"; // => 111 para versoes do PHP < 7.4
// echo "str" + "str", "\n"; // => fatal error para versoes do PHP >= 7.4]

// Você pode converter explicitamente tipos de variáveis
$boolean = (bool) 1; // => true
$boolean = (bool) 0; // => false

// Existem também funções dedicadas para converter a maioria dos tipos
$integer = 5;
$string = strval($integer);
echo gettype($string); // => string
echo $string; // => '5'
