<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
        $saque = $_POST['saque'] ?? 0;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="saque" id="saque" step="5" value="<?=$saque?>" required>
        <p style="font-size: .6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
    </form>
    </main>
    <?php 
        $resto = $saque;
    
        // Saque de R$100,00
        $tot100 = (int)($resto / 100);
        $resto = $resto % 100;
    
        // Saque de R$50,00
        $tot50 = (int)($resto / 50);
        $resto = $resto % 50;
    
        // Saque de R$10,00
        $tot10 = (int)($resto / 10);
        $resto = $resto % 10;
    
        // Saque de R$5,00
        $tot5 = (int)($resto / 5);
        $resto = $resto % 5;
    ?>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="../d013/imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
            <li><img src="../d013/imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$tot50?></li>
            <li><img src="../d013/imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$tot10?></li>
            <li><img src="../d013/imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$tot5?></li>
        </ul>
    </section>
</body>

</html>