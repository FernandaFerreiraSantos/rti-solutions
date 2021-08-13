<?php

if (isset($_POST["cidadeOrigem"]) && isset($_POST["cidadeDestino"]) && isset($_POST["distancia"]) && isset($_POST["pedagios"])) {

    $cidadeOrigem = $_POST["cidadeOrigem"];
    $cidadeDestino = $_POST["cidadeDestino"];
    $distancia = $_POST["distancia"];
    $pedagios = $_POST["pedagios"];
    $totalViagemBruto = ($pedagios * 9.40) +  ($distancia * 6);
    $totalViagem = number_format((float)$totalViagemBruto, 2, ',', '');
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
    <title>Calculadora de Fretes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="calcular.php">
        <p>Calculadora de Fretes</p>

        <label for="cidadeOrigem">
            Cidade de Origem
            <input type="text" id="cidadeOrigem" name="cidadeOrigem" value="<?= $cidadeOrigem ?>" readonly>
        </label>

        <label for="cidadeDestino">
            Cidade de Destino
            <input type="text" id="cidadeDestino" name="cidadeDestino" value="<?= $cidadeDestino ?>" readonly>
        </label>

        <label for="distancia">
            Distância (em KM)
            <input type="number" min="0" id="distancia" name="distancia" value="<?= $distancia ?>" readonly>
        </label>

        <label for="pedagios">
            Quantidade de Pedágios
            <input type="number" min="0" id="pedagios" name="pedagios" value="<?= $pedagios ?>" readonly>
        </label>


        <textarea id="total" cols="22" rows="4" readonly>A viagem de <?= $cidadeOrigem ?> para <?= $cidadeDestino ?> irá custar o valor total de R$<?= $totalViagem ?></textarea>

    </form>

</body>

</html>