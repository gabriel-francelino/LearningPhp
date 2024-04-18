<?php
// Classes são definidas com a palavra-chave class.
class MyClass
{
    // Constantes
    const CONST_VALUE = 'uma constante';

    // Modificadores de acesso
    public $property    = 'public';
    public $instanceProp;
    protected $prot = 'protected'; // Accessible from the class and subclasses
    private $priv   = 'private';   // Accessible within the class only

    // Variaveis estáticas
    private static $var1 = 0;
    static $var2 = 'um valor';
    public static $publicStaticVar = 'public';
    private static $privateStaticVar = 'privateStatic';
    protected static $protectedStaticVar = 'protectedStatic';

    // Construtor
    public function __construct($instanceProp)
    {
        $this->instanceProp = $instanceProp;
    }

    // Métodos
    public function myMethod()
    {
        print 'MyClass';
    }

    public static function myStaticMethod()
    {
        print 'I am static';
    }

    // Método final não pode ser sobrescrito por subclasses
    final function youCannotOverrideThis()
    {
    }

    // O método mágico __toString permite que a classe decida como se comportar quando for convertida para string
    public function __toString()
    {
        return $this->property;
    }

    // O método mágico __destruct é executado quando o objeto  não é mais referenciado
    public function __destruct()
    {
        print 'destruído';
    }

    // Métodos mágicos __get e __set são chamados quando se tenta acessar propriedades inacessíveis
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    // Métodos estáticos
    public static function plusOneToVar1()
    {
        return MyClass::$var1 += 1;
    }
}

// classes final não podem ser estendidas
final class YouCannotExtendMe
{
}
