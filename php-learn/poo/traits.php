<?php 
// Traits são uma forma de reutilizar código em várias classes
// Semelhante a classes abstratas, mas sem herança
// Pode ser usado para definir métodos e propriedades

trait MyTrait
{
    public function myTraitMethod()
    {
        return 'Trait method';
    }
}

class MyTraitfulClass
{
    use MyTrait;
}

$obj = new MyTraitfulClass();
echo $obj->myTraitMethod(); // => 'Trait method'


?>