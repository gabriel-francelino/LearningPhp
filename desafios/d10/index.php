<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $ano_atual = (int) date('Y');
        $ano_nasc = $_GET['ano_nasc'] ?? $ano_atual;
        $ano_idade = $_GET['ano_idade'] > $ano_nasc ? $_GET['ano_idade'] : $ano_atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" max="<?=$ano_atual?>" id="ano_nasc" value="<?=$ano_nasc?>">
            <label for="ano_idade">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano_idade" id="ano_idade" min="<?=$ano_nasc?>" value="<?=$ano_idade?>">
            <input type="submit" value="Qual será minha idade? (Atualmente estamos em <?=$ano_atual?>)">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $idade = $ano_idade - $ano_nasc;
            echo "<p>Quem nasceu em $ano_nasc vai ter <strong>$idade anos</strong> em $ano_idade!</p>";
        ?>
    </section>
</body>

</html>