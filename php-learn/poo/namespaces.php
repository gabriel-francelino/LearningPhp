<?php 
// Namespaces são uma forma de encapsular itens
// Você pode pensar neles como pastas
// Eles são úteis para organizar o código e evitar conflitos de nomes
// Eles são definidos no início do arquivo
// O namespace padrão é global
// Você pode acessar itens fora do namespace com a barra invertida
// Você pode importar namespaces com a palavra-chave use

/*
Por padrão, as classes existem no namespace global e 
podem ser chamado explicitamente com uma barra invertida.
*/
$cls = new \MyClass('uma propriedade');

namespace My\namespace; // Define o namespace
class MyClass{

}

// $cls = new My\namespace\MyClass(); 

// ! Pesquisar mais sobre depois


?>