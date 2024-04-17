<?php
$a = 0;
$b = '0';
$c = '1';
$d = '1';

// Assert retorna um valor booleano, se for falso, o programa para de executar
assert($a == $b); // equality
assert($c != $a); // inequality
assert($c <> $a); // alternative inequality
assert($a < $c);
assert($c > $b);
assert($a <= $b);
assert($c >= $d);

// A seguintes vão ser verdadeiras apenas se tiverem o mesmo tipo e valor
assert($c === $d);
assert($a !== $d);
assert(1 === '1');
assert(1 !== '1');

// Operador 'Spaceship' (desde PHP 7) 
// Retorna 0 se os valores de ambos os lados forem iguais 
// Retorna 1 se o valor à esquerda for maior 
// Retorna -1 se o valor à direita for maior
$a  =  100 ; 
$b  =  1000 ; 

echo "Spaceship: \n";
echo  $a  <=>  $a;  // 0 já que são iguais 
echo  $a  <=>  $b;  // -1 desde $a < $b 
echo  $b  <=>  $a;  // 1 já que $b > $a 
echo "\n";

// Operador de comparação de null coalesce (desde PHP 7)
// Retorna o valor da esquerda se não for nulo, caso contrário, retorna o valor da direita
echo "Null coalesce: \n";
echo  $a  ??  $b;  // 100 já que $a não é nulo
echo  $a  ??  $c;  // 100 já que $a não é nulo
echo  $f  ??  $a;  // 100 já que $f é nulo
echo "\n";

// Operador de atribuição de null coalesce (desde PHP 7)
// Atribui o valor da direita à variável da esquerda se a variável da esquerda for nula
echo "Null coalesce assignment: \n";
$e  =  null ;
$f  =  10 ;
$g  =  20 ;
$e  ??=  $f ;  // $e = $f
echo  $e ;  // 10
$e  ??=  $g ;  // $e não muda, já que $e não é nulo
echo  $e ;  // 10
echo "\n";




