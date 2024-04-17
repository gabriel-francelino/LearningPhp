<?php 
// WHILE
$i = 0;
while ($i < 5) {
    echo $i++;
} // Prints "01234"
echo "\n";

// DO-WHILE
$i = 0;
do {
    echo $i++;
} while ($i < 5); // Prints "01234"
echo "\n";

// FOR
for ($i = 0; $i < 5; $i++) {
    echo $i;
} // Prints "01234"
echo "\n";

// FOREACH
$arr = [1, 2, 3];
foreach ($arr as &$value) {
    $value *= 2;
}
// $arr is now [2, 4, 6]

// FOREACH com chaves
$arr = [1, 2, 3];
foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value\n";
}
// Key: 0; Value: 1
// Key: 1; Value: 2
// Key: 2; Value: 3

$arr = ['bicycle' => 2, 'car' => 4];
foreach ($arr as $key) {
    echo $key . "\n";
}
// Prints "2" and "4"

// BREAK
for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        break; // Para a execução do loop
    }
    echo $i;
} // Prints "012"
echo "\n";

// CONTINUE
for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        continue; // Pula a iteração atual
    }
    echo $i;
} // Prints "0124"
?>