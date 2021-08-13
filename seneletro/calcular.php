<?php

if (isset($_POST["nomeCompleto"]) && isset($_POST["endereco"]) && isset($_POST["consumo"])) {

    $nomeCompleto = $_POST["nomeCompleto"];
    $endereco = $_POST["endereco"];
    $consumo = $_POST["consumo"];
    $totalContaBruto;

    if ($consumo > 120) {
        $totalContaBruto = $consumo * 0.42;
        $class = "vermelho";
        $agradecimento = "Você não economizou :(";
    } else {
        $totalContaBruto = $consumo * 0.32;
        $class = "verde";
        $agradecimento = "Obrigado por economizar!";
    }

    $totalConta = number_format((float)$totalContaBruto, 2, ',', '');
} else {
    echo "ERRO AO ENVIAR FORMULÁRIO!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Conta de Luz</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="calcular.php">
        <p class="linhas">Conta de Luz de <?= $nomeCompleto ?> </p>
        <p class="linhas"><?= $endereco ?></p>
        <p class="linhas"><span class="<?= $class ?>">Consumo: <?= $consumo ?>kWh</span></p>
        <p class="linhas">Valor a pagar: R$<?= $totalConta ?></p>
        <p class="linhas"><?= $agradecimento ?></p>


    </form>

</body>

</html>