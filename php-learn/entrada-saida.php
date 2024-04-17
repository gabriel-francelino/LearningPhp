<?php
// saida de dados 
echo 'Eu sou um echo';
echo ('Eu sou um echo');
print('Eu sou um print');
print 'Eu sou um print';
print_r('Eu sou um print_r');
var_dump('Eu sou um var_dump');

// saida de dados com quebra de linha
echo 'Eu sou um echo' . PHP_EOL . 'Eu sou um echo' . PHP_EOL;
print 'Eu sou um print' . PHP_EOL . 'Eu sou um print' . PHP_EOL;
print_r('Eu sou um print_r' . PHP_EOL . 'Eu sou um print_r' . PHP_EOL);
var_dump('Eu sou um var_dump' . PHP_EOL . 'Eu sou um var_dump' . PHP_EOL);

// imprimindo variaveis
$nome = 'João';
echo $nome;
print $nome;
print_r($nome);
var_dump($nome); // => imprime: string(5) "João"

// imprimindo valores diretamente
echo 'João';
echo 100;
echo 100.50;
echo true;
echo false;
echo null;
echo PHP_EOL;

// passando mais de um valor por parametro para imprimir
echo 'João', 100, 100.50, true, false, null, PHP_EOL;

// imprimindo arrays
$array = [1, 2, 3, 4, 5];
print_r($array); // => imprime: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
var_dump($array); // => imprime: array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
