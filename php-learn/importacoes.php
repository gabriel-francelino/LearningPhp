<?php
// O PHP dentro dos arquivos incluídos também deve começar com uma tag de abertura do PHP.

// INCLUDE
include 'logica.php';
// O código em my-file.php agora está disponível no escopo atual. 
// Se o arquivo não puder ser incluído (por exemplo, arquivo não encontrado), um aviso será emitido. 

include_once 'logica.php';
// Se o código em my-file.php tiver sido incluído em outro lugar, 
// ele não será incluído novamente. Isso evita vários erros de declaração de classe 


// REQUIRE
require 'logica.php';
require_once 'logica.php';
// Se o código em my-file.php tiver sido incluído em outro lugar, 
// ele não será incluído novamente. Isso evita vários erros de declaração de classe 

// INCLUDE E REQUIRE PODE RETORNAR UM VALOR
// Se o arquivo incluído contiver uma declaração return, o valor retornado será retornado pela chamada include ou require.
$valor = include  'string.php';
echo $valor;
