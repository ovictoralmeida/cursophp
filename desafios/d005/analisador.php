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
        <h1>Analisador de Número Real</h1>
        <?php 
            $number = $_GET["number"] ?? 0;
            $parteInteira = intval($number);
            $parteFracionaria = fmod($number, 1);
            $parteFracionariaFormatada = number_format($parteFracionaria, 3);

            echo "Analisando o número <strong>" . number_format($number , 3, ",", ".") . "</strong> informado pelo usuário: 
                <ul>
                <li>A parte inteira do número é <strong>" . number_format($parteInteira, 0, ",", ".") . "</strong></li> 
                <li>A parte fracionária do número é <strong>$parteFracionariaFormatada</strong></li>
                </ul>"
        ?>
        <p><button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>