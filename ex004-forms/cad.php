<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
        <main>
            <?php 
                // var_dump($_REQUEST); // $_GET $_POST $_COOKIES
                $nome = $_GET['nome'] ?? 'Fulano';
                $sobrenome = $_GET['sobrenome'] ?? 'de Tal';

                echo "É um prazer te conhecer, <strong>$nome $sobrenome</strong> !";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </main>
    </header>
</body>
</html>