<?php
interface InterfaceOne
{
    public function doSomething();
}

interface InterfaceTwo
{
    public function doSomethingElse();
}

// Interfaces podem estender outras interfaces
interface InterfaceThree extends InterfaceOne, InterfaceTwo
{
    public function doAnotherThing();
}

abstract class AbstractClass
{
    // Métodos abstratos não têm corpo e devem ser implementados nas classes filhas
    abstract protected function getValue();

    // Métodos abstratos podem ter argumentos
    abstract protected function prefixValue($prefix);

    // Métodos não abstratos podem ser implementados normalmente
    public function printOut()
    {
        print $this->getValue() . "\n";
    }
}

// Classes podem implementar quantas interfaces forem necessárias
abstract class MyAbstractClass implements InterfaceOne
{
    public $x = 'doSomething';
}

class MyConcreteClass extends MyAbstractClass implements InterfaceTwo {
    public function doSomething()
    {
        echo $this->x;
    }

    public function doSomethingElse()
    {
        echo 'doSomethingElse';
    }
}

class SomeOtherClass implements InterfaceOne, InterfaceTwo, InterfaceThree {
    public function doSomething()
    {
        echo 'doSomething';
    }

    public function doSomethingElse()
    {
        echo 'doSomethingElse';
    }

    public function doAnotherThing()
    {
        echo 'doAnotherThing';
    }
}

$obj = new MyConcreteClass();
$obj->doSomething(); // => 'doSomething'
$obj->doSomethingElse(); // => 'doSomethingElse'

$obj = new SomeOtherClass();
$obj->doSomething(); // => 'doSomething'
$obj->doSomethingElse(); // => 'doSomethingElse'
$obj->doAnotherThing(); // => 'doAnotherThing'
