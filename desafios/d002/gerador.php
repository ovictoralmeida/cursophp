<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        
        <?php 
            $numeroAleatorio = mt_rand(0, 100);

            echo "<p>O valor gerado foi <strong>$numeroAleatorio</strong>";
        ?>

        <form action="gerador.php" method="get">
            <button type="submit">Gerar</button>
        </form>
    </section>
</body>
</html>