<?php

    include "../connect/connect.php";
    include "../nav-bar.php";
    
    $consulta = "SELECT * FROM pedido";
    $resultado_consulta = mysqli_query($conn, $consulta);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR_PRODUTOS_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Informações dos Pedidos</h1>
    <table class="table table-striped">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">ID CLIENTE</td>
            <td scope="col">DATA</td>
            <td scope="col">SITUAÇÃO</td>
            <td scope="col">OPÇÕES</td>
        </tr>
        <?php
            if($resultado_consulta){
                while($linhasretornadas = mysqli_fetch_assoc($resultado_consulta)){
                    $id = $linhasretornadas['id_pedi'];
                    $id_clie = $linhasretornadas['id_clie'];
                    $data = $linhasretornadas['data_pedi'];
                    $situacao = $linhasretornadas['situacao'];
                    echo '
                        <tr>
                            <th>'.$id.'</th>    
                            <th>'.$id_clie.'</th>    
                            <td>'.$data.'</td>    
                            <td>'.$situacao.'</td>
                            <td>
                            <button class="btn btn-primary"><a class="text-light" href="editar_ped.php?id='.$id.'">Editar</a></button>
                            <button class="btn btn-danger"><a class="text-light" href="excluir_ped.php?id='.$id.'">Excluir</a></button>
                            </td>
                        </tr>    
                    ';
                }
            }
        ?>
    </table>
</body>
</html>