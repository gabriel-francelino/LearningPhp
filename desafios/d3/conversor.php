<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php
        $cotacao_us = 5.22;
        $valor = $_GET['valor'] ?? 1;
        $valor_us = $valor / $cotacao_us;

        echo "<p>Seus " . number_format($valor, 2, ',', '.') . " equivalem a <strong>US$ " . number_format($valor_us, 2, ',', '.') . "</strong></p>";

        echo "<p><strong>*Cotação fixa de R$" . number_format($cotacao_us, 2, ',', '.') . "</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>