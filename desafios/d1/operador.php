<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numero = $_GET['numero'] ?? 0;
            $ant = $numero-1;
            $suc = $numero+1;
            echo "O número escolhido foi <strong>$numero</strong><br>";
            echo "O seu antecessor é $ant<br>";
            echo "O seu sucessor é $suc<br>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>

</html>