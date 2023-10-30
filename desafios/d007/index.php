<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica se o campo 'sal' foi preenchido
            if (isset($_POST["sal"])) {
                // Obtém o valor do campo 'sal' do formulário
                $salario = $_POST["sal"] ?? 0;
                
                // Salário mínimo
                $salarioMinimo = 1_380.60;
                
                // Calcula quantas vezes o salário é equivalente ao salário mínimo
                $vezes = intdiv($salario, $salarioMinimo);
                $dif = $salario % $salarioMinimo;
            } else {
                $vezes = "Por favor, informe o salário";
            }
        } else {
            $vezes = "";
        }
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salarioMinimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            if (!empty($vezes)) {
                echo "Quem recebe um salário de R\$". number_format($salario, 2, ",", ".")." ganha <strong>$vezes salários mínimos</strong> + R\$". number_format($dif, 2, ",", "."). ".";
            }
        ?>
    </section>
</body>
</html>