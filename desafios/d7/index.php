<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $salario = $_GET['salario'];
        $salario_minimo = 1380.00; 

        $format = function ($valor) {
            return number_format($valor, 2, ',', '.');
        };
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?= 'R$' . $format($salario_minimo)?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $quantidade_salarios = intdiv($salario, $salario_minimo);
            $resto = $salario % $salario_minimo;

            echo "<p>Quem recebe um salário de R\$" . $format($salario) . " ganha <strong>$quantidade_salarios salários mínimos</strong> + R$" . $format($resto) . ".</p>";
        ?>
    </section>
</body>

</html>