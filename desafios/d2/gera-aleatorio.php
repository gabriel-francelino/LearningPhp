<?php 
    $num_aleatorio = mt_rand(0, 100);
    // rand() = 1951 - Linear Congrential Generator
    // mt_rand() = 1997 - Mersennne Twister 4x mais rapido que rand()
    // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
    echo "<p>O valor gerado foi <strong>$num_aleatorio</strong></p>";
?>