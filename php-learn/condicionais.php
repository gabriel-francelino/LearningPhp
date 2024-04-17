<?php
// Estruturas IF-ELSE
if (true) {
    print 'I get printed';
}

if (false) {
    print 'I don\'t';
} else {
    print 'I get printed';
}

if (false) {
    print 'Does not get printed';
} elseif (true) {
    print 'Does';
}

// Operador ternário
print(false ? 'Does not get printed' : 'Does');

// Operador ternário até php 5.3
// Equivalent to $x ? $x : $y
$x = false;
print($x ?: 'Does');

// Operador null coalesce (desde PHP 7)
// Retorna o valor da esquerda se não for nulo, caso contrário, retorna o valor da direita
$a = null;
$b = 'Does print';
echo $a ?? 'a is not set'; // prints 'a is not set'
echo $b ?? 'b is not set'; // prints 'Does print'

$x = 0;
if ($x === '0') {
    print 'Does not print';
} elseif ($x == '1') {
    print 'Does not print';
} else {
    print 'Does print';
}
?>
<!-- Sintaxe alternativa é utíl para templates -->
<?php if ($x) : echo "if" ?>
    <!-- This is displayed if the test is truthy. -->
<?php else : ?>
    <!-- This is displayed otherwise. -->
<?php endif; ?>

<?php
// Estrutura SWITCH-CASE
switch ($x) {
    case '0':
        print 'Switch does type coercion';
        break; // You must include a break, or you will fall through
    case 'two':
    case 'three':
        // Do something if $variable is either 'two' or 'three'
        break;
    default:
        // Do something by default
}

?>