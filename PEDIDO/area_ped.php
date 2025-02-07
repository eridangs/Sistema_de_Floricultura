<?php

    include "../connect/connect.php";
    include "../nav-bar.php";

    $sql = "SELECT * FROM cliente";
    $consulta = mysqli_query($conn,$sql);
    //var_dump($result);
  
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
        <form method="POST" action="cadastro_ped.php">

        <h4>CLIENTE</h4>
        <select name="id_clie" id="id_clie">
         <option value="null" selected> Escolha um cliente: </option>
            <?php
                while($row = mysqli_fetch_assoc($consulta)){
                    echo '
                         <option value=" '.$row["id_clie"].' ">  '.$row["nome_cli"].' </option>
                    ';
                }
            ?>
            </select>
        
       
            <h4>DATA</h4>
            <input type="date" name="data" id="data" placeholder="Data do pedido:  ">

            
            <h4>SITUAÇÃO</h4>  
            <select name="situacao" id="situacao">
                <option value="Pago">Pago</option>
                <option value="Cancelado">Cancelado</option>
            </select>
            
             
            
            <button class="btn btn-success" type="submit" name="cadastrar" value="cadastrar">CADASTRAR PEDIDO</button>
        </form>
    </div>
</body>
</html>