<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $preco = $_GET['preco'] ?? 0.00;
        $porcentagem = $_GET['porcentagem'] ?? 0.00;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">
            <label for="porcentagem">Qual será o porcentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="1" step="0.01" value="<?=$porcentagem?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            function format($valor) {
                return number_format($valor, 2, ',', '.');
            };

            $reajuste = $preco * (1 + $porcentagem);
            echo "<p>O produto que custava R$" . format($preco) . ", com " . ($porcentagem*100) . "% de aumento vai passar a custar R$" . format($reajuste) . " a partir de agora.</p>";
        ?>
    </section>
    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = porcentagem.value * 100;
        }
    </script>
</body>

</html>