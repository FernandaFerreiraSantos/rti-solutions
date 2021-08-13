<?php
    if (isset ($_POST ["nome"]) && (isset ($_POST ["salario"]) && (isset ($_POST ["genero"]) && (isset ($_POST ["cargo"])){

        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $genero = $_POST["genero"];
        $cargo = $_POST["cargo"];

        $salarioNovo = 0;

            // if ($salario > 500 0) {

            // }

        $salarioNovo = $salario > 5000 ? $salario * 1.1 : $salario * 1.2;
        
        }else{
            die ("<main> Você não enviou os dados</main>")
        }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular salario</title>
</head>
<body>
    <main>
        <p><?= $genero === "m" ? "o" : ($genero === "f" ? "A" : "" )?> <?= $nome ?> passará a receber R$ <?= number_format($salarioNovo, 2, ",", "." ) ?>, no cargo de <?= $cargo?></p>
    </main>
</body>
</html>