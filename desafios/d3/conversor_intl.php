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
        <h1>Conversor de Moedas v1.1</h1>
    </header>
    <main>
        <?php
        $cotacao_us = 5.22;
        $valor = $_GET['valor'] ?? 1;
        $valor_us = $valor / $cotacao_us;
        $format_value = function ($value, $currency) {
            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
            return numfmt_format_currency($padrao, $value, $currency);
        };


        echo "<p>Seus " . $format_value($valor, "BRL") . " equivalem a <strong>US$ " . $format_value($valor_us, "USD") . "</strong></p>";

        echo "<p><strong>*Cotação fixa de R$" . $format_value($cotacao_us, "BRL") . "</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>