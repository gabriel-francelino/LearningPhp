<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $n1 = $_GET['n1'] ?? 1;
        $p1 = $_GET['p1'] ?? 1;
        $n2 = $_GET['n2'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">1° Valor:</label>
            <input type="number" name="n1" id="n1" value="<?=$n1?>">
            <label for="p1">1° Peso:</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
            <label for="n2">2° Valor:</label>
            <input type="number" name="n2" id="n2" value="<?=$n2?>">
            <label for="p2">2° Peso:</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculos das Médias</h2>
        <?php
            function format($valor) {
                return number_format($valor, 2, ',', '.');
            };
            
            $total_s = $n1 + $n2;
            $total_p = $n1 * $p1 + $n2 * $p2;
            $soma_pesos = $p1 + $p2;
            $quantidade = 2;
            $ms = $total_s / $quantidade;
            $ms_format = format($ms);
            $mp = $total_p / $soma_pesos;
            $mp_format = format($mp);
            

            echo "<p>Analisando os valores $n1 e $n2</p>";
            echo <<<LIST
                <ul>
                    <li>A Média Aritmética Simples entre os valores é igual a $ms_format.</li>
                    <li>A Média Aritmética Ponderada com os pesos $p1 e $p2 é igual a $mp_format.</li>
                </ul>
            LIST;
        ?>
    </section>
</body>

</html>