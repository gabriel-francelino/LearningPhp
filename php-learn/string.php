<?php
// Strings
// Strings podem ser colocadas entre aspas simples.
$sgl_quotes = '$String'; // => '$String'
// Evite o uso de aspas duplas, exceto para incorporar outras variáveis
$dbl_quotes = "Esta é uma $sgl_quotes."; // => 'Esta é uma $String.'
// Os caracteres especiais só são escapados entre aspas duplas.
$scaped = "Contém um caractere de tabulação \t .";
$unescaped = 'Contém um caractere de tabulação \t .';

// Coloque uma variável entre chaves se necessário 
$number  =  23;
$apples  =  "Tenho { $number } maçãs para comer.";    // => Tenho 23 maçãs para comer. 
$oranges  =  "Tenho ${number} laranjas para comer.";  // => Tenho 23 laranjas para comer. (depreciado)
$money  =  "Tenho $ ${number} no banco.";      // => Tenho $23 no banco. (depreciado)

// Desde o PHP 5.3, nowdocs podem ser usados ​​para multi-liners não interpolados 
// $nowdoc  =  <<<' END ' 
// Multi line 
// string 
// END ;

// Heredocs fará interpolação de strings 
// $heredoc  =  <<< END 
// Multi line 
// $sgl_quotes 
// END ;

// Concatenacao de strings
$string1 = 'primeira parte da string';
$string2 = 'segunda parte da string';
$string = $string1 . $string2; // => 'primeira parte da stringsegunda parte da string'
