<?php
include 'classes.php';

// Constantes de classe sempre podem ser acessadas estaticamente
echo MyClass::CONST_VALUE; // => 'uma constante'

// Acessando propriedades estáticas
echo MyClass::$publicStaticVar; // => 'public'
MyClass::myStaticMethod(); // => 'I am static'

// Instanciando objetos
$obj = new MyClass('uma propriedade');
echo "\n";

// Acessando propriedades de instância
echo $obj->property; // => 'public'
echo $obj->instanceProp; // => 'uma propriedade'
$obj->myMethod(); // => 'MyClass'
echo "\n";

// Acessando propriedades privadas e protegidas
echo $obj->priv; // vai usar o método mágico __get
echo "\n";
$obj->priv = "newPrivate"; // vai usar o método mágico __set
echo $obj->priv;
echo "\n";

/* Operadores Nullsafe desde o PHP 8 
Você pode usar isso quando não tiver certeza se a abstração 
de $my_class contém tem uma propriedade/método 
pode ser usado em conjunto com o operador nullish coalesce 
para garantir o valor adequado 
*/
echo $obj?->property ?? 'default'; // => 'public'
echo "\n";
