<?php

    include "../connect/connect.php";
    include "../nav-bar.php";

    $consulta = "SELECT * FROM cliente";
    $resultado_consulta = mysqli_query($conn, $consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR_CLIENTE_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Informações dos Clientes</h1>

    <table class="table table-striped">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">NOME</td>
            <td scope="col">TELEFONE</td>
            <td scope="col">CPF</td>
            <td scope="col">OPÇÕES</td>
        </tr>
        <?php
            if($resultado_consulta){
                while($linhasretornadas = mysqli_fetch_assoc($resultado_consulta)){
                    $id = $linhasretornadas['id_clie'];
                    $nome = $linhasretornadas['nome_cli'];
                    $telefone = $linhasretornadas['telefone'];
                    $cpf = $linhasretornadas['cpf'];
                    echo '
                        <tr>
                            <th>'.$id.'</th>    
                            <td>'.$nome.'</td>    
                            <td>'.$telefone.'</td>  
                            <td>'.$cpf.'</td>
                            <td>
                            <button class="btn btn-primary"><a class="text-light" href="editar_cli.php?idcli='.$id.'">Editar</a></button>
                            <button class="btn btn-danger"><a class="text-light" href="excluir_cli.php?idcli='.$id.'">Excluir</a></button>
                            </td>
                        </tr>    
                    ';
                }
            }
        ?>
    </table>
</body>
</html>