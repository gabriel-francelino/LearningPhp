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
        $fim = date('m-d-Y');
        $inicio = date('m-d-Y', strtotime('-7 days'));

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), false);

        $cotacao = $dados->value[0]->cotacaoCompra;

        $valor = $_GET['valor'] ?? 1;
        $valor_us = $valor / $cotacao;

        echo "<p>Seus " . number_format($valor, 2, ',', '.') . " equivalem a <strong>US$ " . number_format($valor_us, 2, ',', '.') . "</strong></p>";

        $url_bcb = 'https://dadosabertos.bcb.gov.br/';

        echo "<p><strong>*Cotação fixa de R$" . number_format($cotacao_us, 2, ',', '.') . "</strong> informada pelo <a href=\"$url_bcb\">Banco Central do Brasil</a>.</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>