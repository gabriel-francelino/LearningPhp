<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            echo "<p>Dividendo: $dividendo</p>";
            echo "<p>Divisor: $divisor</p>";
            echo "<p>Resultado: $resultado</p>";
            echo "<p>Resto: $resto</p>";
        ?>
    </section>
</body>

</html>