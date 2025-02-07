<?php

include "connect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO_PEDIDO_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Cadastre o pedido</h1>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST" action="cadastro_prod.php">
            <h4>DATA</h4>
            <input type="date" name="data" id="nome" placeholder="Data do pedido:  ">
            <h4>SITUAÇÃO</h4>            
            <input type="text" name="situacao" id="situacao" placeholder="Situação do pedido (Pago ou Cancelado): ">
            
            <button class="btn btn-success" type="submit" name="cadastrar" value="cadastrar">CADASTRAR PEDIDO</button>
        </form>
    </div>
</body>
</html>