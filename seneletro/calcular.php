<?php

if (
    isset($_POST["nome"]) && isset($_POST["rua"]) &&
    isset($_POST["numero"]) && isset($_POST["consumo"])
) {

    $nome = $_POST["nome"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $consumo = $_POST["consumo"];

    if ($consumo > 120) {
        $valorTotal = $consumo * 0.42;
        $estilo = "alto-consumo";
        $agradecimento = "";
    } else {
        $valorTotal = $consumo * 0.32;
        $estilo = "baixo-consumo";
        $agradecimento = "<h2 class='baixo-consumo'>Obrigado por economizar</h2>";
    }
} else {
    //neste caso, o usuário não enviou os dados na requisição
    echo "Você não enviou os dados corretamente";
    die;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor do frete</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <main>
        <h1>Conta de luz de <?= $nome ?>.</h1>
        <p><?= "$rua, $numero" ?></p>
        <p class="<?= $estilo ?>">Consumo: <?= $consumo ?>kWh.</p>
        <p>Valor a pagar: R$ <em><?= number_format($valorTotal, 2, ",", ".") ?></em>.</p>
        <?= $agradecimento ?>
    </main>
</body>

</html>