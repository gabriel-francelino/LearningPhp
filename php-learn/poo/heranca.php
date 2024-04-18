<?php
include 'classes.php';

// Classes pode ser estendidas usando a palavra-chave extends
class MyOtherClass extends MyClass
{
    // Herda propriedades e métodos de MyClass
    public function printProtectedProperty()
    {
        echo $this->instanceProp;
    }

    // Métodos podem ser sobrescritos
    public function myMethod()
    {
        parent::myMethod();
        print 'MyOtherClass';
    }
}

$obj = new MyOtherClass('uma propriedade');
$obj->printProtectedProperty(); // => 'uma propriedade'
$obj->myMethod(); // => 'MyOtherClass'
