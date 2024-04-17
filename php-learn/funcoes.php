<?php 
// Definindo uma função com 'function'
function my_function () {
    return "Hello\n";
}
echo my_function(); // => "Hello"

// Funções podem receber argumentos
function add($x, $y = 1) { // $y é opcional e tem um valor padrão de 1
    return $x + $y;
}
echo add(4), "\n"; // => 5
echo add(4, 2), "\n"; // => 6

// Desde o php 5.3 você pode declarar funcoes anonimas
$inc = function ($x) {
    return $x + 1;
};
echo $inc(2); // => 3

// Funções podem receber outras funções como argumentos
function foo($x, $y) {
    return $x($y); // Chama a função $x com $y como argumento
}
echo foo($inc, 2); // => 3

// Funções podem receber um número variável de argumentos
function sum(...$numbers) { // Os três pontos antes do nome do parâmetro indicam um número variável de argumentos
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}
echo sum(1, 2, 3, 4); // => 10

// Funções podem retornar outras funções
function foo1 ($x, $y, $z) {
    echo "$x - $y - $z";
}
function bar ($x, $y) {
    // Use 'use' para trazer variáveis ​​externas para o escopo da função interna
    return function ($z) use ($x, $y) {
        foo1($x, $y, $z);
    };
}
$bar = bar('A', 'B');
$bar('C'); // Prints "A - B - C"

// Pode chamar funções nomeadas usando strings
// Transforma a funcao em uma funcao anonima
$add1 = 'add';
echo $add1(1); // => 2

?>