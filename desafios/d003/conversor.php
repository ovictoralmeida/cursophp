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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $number = $_GET["money"] ?? 0;
            $dollar = $number / 4.85;
            $dollarFormatted = number_format($dollar, 2);

            // echo "Seus R\$" . number_format($number, 2, ",", ".") . " equivalem a US$ $dollarFormatted <p><strong>*Cotação fixa de R$4,85</strong> informada diretamento no código.";


            // Formataçao de moedas com internacionaizaçao
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $number, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dollar, "USD");
        ?>
        <p><button><a href="javascript:history.go(-1)">Voltar</a></button></p>
    </section>
</body>
</html>