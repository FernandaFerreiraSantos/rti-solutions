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
        <p>Aumento Salarial</p>

        <p>Aumento Salarial</p>

        <label for="nome">
            Nome
            <input class="texto" type="text" id="nome" name="nome" required>
        </label>

        <label for="salario">
            Salário (em R$)
            <input class="texto" type="text" id="salario" name="salario" required>
        </label>

        <div class="generos">
            <label>Gênero:</label>
            <label for="masculino">
                <input type="radio" id="masculino" name="genero" value="masculino">Masculino
            </label>

            <label for="feminino">
                <input type="radio" id="feminino" name="genero" value="feminino">Feminino
            </label>

            <label for="outros">
                <input type="radio" id="outros" name="genero" value="outros">Outros
            </label>
        </div>


        <textarea id="total" cols="22" rows="4" readonly>A viagem de <?= $cidadeOrigem ?> para <?= $cidadeDestino ?> irá custar o valor total de R$<?= $totalViagem ?></textarea>

    </form>

</body>

</html>