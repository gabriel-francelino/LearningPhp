<?php
// TRY-CATCH
try {
    // Do something
} catch (Exception $e) {
    // Handle exception
}

/*
Ao usar blocos try catch em um ambiente com namespace, é 
importante escapar para o namespace global, porque exceções 
são classes e a classe Exception existe no namespace global. 
Isso pode ser feito usando uma barra invertida inicial para capturar a exceção.
*/
try {
    // Do something
} catch (\Exception $e) {
    // Handle exception
}

// Exeçoões personalizadas
class MyException extends Exception {}

try {
    throw new MyException("Something went wrong\n");
} catch (MyException $e) {
    echo $e->getMessage();
}
