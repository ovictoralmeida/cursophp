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
        <h1>Resultado Final</h1>
        <br>
        <?php 
            $number = $_POST["number"] ?? 0; // Se nao vier nenhum numero, "number" = 0
            $antecessor = $number - 1;
            $sucessor = $number + 1;

            echo "O número escolhido foi <strong>$number</strong> <p> O seu <em>antecessor</em> é $antecessor <p> O seu <em>sucessor</em> é $sucessor";
        ?>
        <p><button><a href="javascript:history.go(-1)">Voltar</a></button></p>
    </section>
</body>
</html>