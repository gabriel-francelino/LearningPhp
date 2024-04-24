<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = $_GET['n1'] ?? 0;
        $numero2 = $_GET['n2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Número 1:</label>
            <input type="number" name="n1" id="n1" value="<?=$numero1?>">
            <label for="n2">Número 2:</label>
            <input type="number" name="n2" id="n2" value="<?=$numero2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $numero1 + $numero2;
            echo "<p>$numero1 + $numero2 = <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>