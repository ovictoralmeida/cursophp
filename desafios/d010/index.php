<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $atual = date("Y");
        $nasc = $_POST['nasc'] ?? '2000';
        $ano = $_POST['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="nasc">Em que ano nasceu?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
        <label for="ano">Quer saber a sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
        <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $idade = $ano - $nasc
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>

</html>