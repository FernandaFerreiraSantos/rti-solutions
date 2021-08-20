<?php
if (
    isset($_POST["origem"]) && isset($_POST["destino"])
    && isset($_POST["distancia"]) && isset($_POST["pedagios"])
) {

    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $distancia = $_POST["distancia"];
    $pedagios = $_POST["pedagios"];

    $valorFrete = 0;

    $valorFrete = $distancia * 6;

    // $valorFrete = $valorFrete + $pedagios * 9.4;
    $valorFrete += $pedagios * 9.4;
} else {
    echo "Você não enviou os dados";
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor do frete</title>
    <link rel="stylesheet" href="calcular.css" />
</head>

<body>
    <p class="resultado">A viagem de <?= $origem ?> à <?= $destino ?>
        irá custar o valor total de R$
        <em><?= number_format($valorFrete, 2, ",", ".") ?></em>.
    </p>
</body>

</html>