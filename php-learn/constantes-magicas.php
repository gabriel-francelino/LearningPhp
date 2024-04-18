<?php 
// Constantes mágicas são valores que o PHP define automaticamente
// Elas começam e terminam com dois underscores

// Para obter o nome da classe atual. deve ser usado dentro de uma classe
echo "O nome da classe atual é " . __CLASS__ . "\n";

// Para obter o nome da função atual.
echo "O nome da função atual é " . __FUNCTION__ . "\n";

echo "O diretório do arquivo atual é " . __DIR__ . "\n";
/*
Typical usage
require __DIR__ . '/vendor/autoload.php';
*/

echo "O caminho do arquivo atual é " . __FILE__ . "\n";

echo "O numero da linha atual é " . __LINE__ . "\n";

echo "O namespace atual é " . __NAMESPACE__ . "\n";

//Obtenha o nome da 'trait' atual. Retorna apenas um valor quando usado dentro de uma declaração de 'trait' ou objeto.
echo "O nome da trait atual é " . __TRAIT__ . "\n";




?>