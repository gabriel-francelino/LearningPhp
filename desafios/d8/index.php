<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;

        $format = function ($valor) {
            return number_format($valor, 3, ',', '.');
        };
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" step="0.01" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $raiz2 = sqrt($numero);
            $raiz3 = $numero ** (1/3);
            $raiz2_format = $format($raiz2);
            $raiz3_format = $format($raiz3);

            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            echo <<<LIST
                <ul>
                    <li>A sua raíz quadrada é <strong>$raiz2_format</strong></li>
                    <li>A sua raíz cúbica é <strong>$raiz3_format</strong></li>
                </ul>
            LIST;
        ?>
    </section>
</body>

</html>