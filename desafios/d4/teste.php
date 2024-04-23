<?php
$fim = date('m-d-Y');
$inicio = date('m-d-Y', strtotime('-7 days'));

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url),false);

$cotacao = $dados->value[0]->cotacaoCompra;

echo "<p>Cotação do dólar: R$ " . number_format($cotacao, 2, ',', '.') . "</p>";
