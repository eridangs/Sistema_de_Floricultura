<?php

    include "connect.php";
    include "nav-bar.php";

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO_PRODUTOS_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST" action="cadastro_prod.php">
            <h4>NOME</h4>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto: ">
            <h4>TIPO</h4>            
            <input type="text" name="tipo" id="tipo" placeholder="Digite o tipo do produto (Flores, Plantas, Buquês e Arranjos, Complementos): ">
            <h4>QUANTIDADE</h4>            
            <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade do produto no estoque: ">
            <h4>PREÇO</h4>
            <input type="text" name="preco" id="preco" placeholder="Digite o preço do produto: ">
            
            <button class="btn btn-success" type="submit" name="cadastro" value="cadastrar">CADASTRAR PRODUTO</button>
        </form>
    </div>
</body>
</html>