<?php
// Valores booleanos não diferenciam maiúsculo de minúsculo (case-insensitive).
$boolean = true;
$boolean = false;
$boolean = TRUE;
$boolean = FALSE;
$boolean = True;
$boolean = False;

// Inteiros
$int1 = 12;   // => 12
$int2 = -12;  // => -12
$int3 = 012;  // => 10 (um 0 denota um número octal)
$int4 = 0x0F; // => 15 (um 0x denota um literal hex)

// Flutuantes - Floats (aka doubles)
$float = 1.234;
$float = 1.2e3;
$float = 7E-10;

$string1 = 'string';
$string2 = "string";

// Excluir variavel
unset($int1);

// Verificar se a variável foi definida
isset($int1); // false

// NULL é atribuído a uma variável que não foi definida ou foi desativada
$indefinida = NULL;

// Declaracao de constantes
// Uma constante é definida por usando define()
define('CONST1', 'algum valor');
// Outra forma de definir uma constante
const CONST2 = 'outro valor';

// Atribuição de variaveis
$var1 = 'valor';
$var2 = 10;
$var3 = $var1;
$var4 = &$var2;
// $var3 é 'valor'. $var4 é uma referência para $var2, então $var4 é 10.
// Se $var2 é alterado, $var4 também é alterado.
