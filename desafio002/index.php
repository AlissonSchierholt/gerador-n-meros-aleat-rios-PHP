<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de números aleatórios:</h1>          
        <p>
            <?php 
            $gerador = mt_rand(0, 100);
            echo "Gerando um número aleatório entre 0 e 100... <br>";
            echo "O valor gerado foi <strong>$gerador </strong>.";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">Gerar Outro</button>
    </main>
</body>
</html>