<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $num_aleatorio = mt_rand(0, 100);
            // rand() = 1951 - Linear Congrential Generator
            // mt_rand() = 1997 - Mersennne Twister 4x mais rapido que rand()
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            echo "<p>O valor gerado foi <strong>$num_aleatorio</strong></p>";
        ?>
        <button onclick="javascript:window.location.reload()">&#x1F504; Gerar outro</button>
    </section>
</body>

</html>