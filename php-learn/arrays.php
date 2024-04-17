<?php
// Os arrays todos em PHP são arrays associativos (hashmaps em algumas linguagens) 

// Funciona com todas as versões do PHP 
$associative = array('key' => 'value', 'outra_key' => 'outra_value');

// A partir do PHP 5.4
$associative = ['key' => 'value', 'outra_key' => 'outra_value'];

// Lista literais atribui implicitamente chaves inteiras 
$array = ['One', 'Two', 'Three'];

// Acessando um array associativo
echo $array[0]; // => "One"
echo $associative['key']; // => 'value'

// Adiciona um elemento a um array associativo
$associative['Four'] = 4; // => ['key' => 'value', 'outra_key' => 'outra_value', 'Four' => 4]

// Adiciona um elemento ao final de um array 
$array[] = 'Four';
// ou 
array_push($array, 'Cinco');

// Remove elemento do array 
unset($array[3]);
