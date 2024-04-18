<?php
class ParentClass
{
    public static function who()
    {
        echo "I am a " . __CLASS__ . "\n";
    }

    public static function test()
    {
        // self faz referência à classe na qual o método está definido
        self::who();
        // static faz referência à classe na qual o método foi invocado
        static::who();
    }
}

ParentClass::test();

class ChildClass extends ParentClass
{
    public static function who()
    {
        echo "But, I am " . __CLASS__ . "\n";
    }
}

ChildClass::test();
