<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_GET['number'];
            
            // if (!is_float($numero)) {
                
            // }

            $partes = explode('.', $numero);
            $parte_int = $partes[0] ?? 0;
            $parte_int_format = number_format($parte_int, 3, ',', '.');
            $parte_dec = $partes[1] ?? 0;
            $parte_dec_format = number_format($parte_dec, 3, ',', '.');

            echo "<p>Analisando o número <strong>$numero</strong> informado pelo usuário:</p>";
            echo "<p>A parte inteira do número é <strong>$parte_int_format</strong></p>";
            echo "<p>A parte fracionária do número é <strong>$parte_dec_format</strong></p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>