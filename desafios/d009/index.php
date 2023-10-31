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
        $valor1 = $_POST['v1'] ?? '';
        $peso1 = $_POST['p1'] ?? '';
        $valor2 = $_POST['v2'] ?? '';
        $peso2 = $_POST['p2'] ?? '';
    ?>
    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="v1">1° Valor</label>
        <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
        <label for="p1">1° Peso</label>
        <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
        <label for="v2">2° Valor</label>
        <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
        <label for="p2">2° Peso</label>
        <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $mediaAritmetica = ($valor1 + $valor2) / 2;
            $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2)
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?></p>
        <ul>
            <li>
                A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($mediaAritmetica, 2, ",", ".")?>.
            </li>
            <li>
                A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mediaPonderada, 2, ",", ".")?>.
            </li>
        </ul>
    </section>
</body>
</html>