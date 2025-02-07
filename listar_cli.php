<?php
    include "connect.php";
    include "nav-bar.php";

    $consulta = "SELECT * FROM produtos";
    $resultado_consulta = mysqli_query($conn, $consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR_PRODUTOS_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Informações dos Produtos</h1>

    <table class="table table-striped">
        <tr>
            <td scope="col">ID</td>
            <td scope="col">NOME</td>
            <td scope="col">TIPO</td>
            <td scope="col">QUANTIDADE</td>
            <td scope="col">PREÇO</td>
            <td scope="col">OPÇÕES</td>
        </tr>
        <?php
            if($resultado_consulta){
                while($linhasretornadas = mysqli_fetch_assoc($resultado_consulta)){
                    $id = $linhasretornadas['id_prod'];
                    $nome = $linhasretornadas['nome'];
                    $tipo = $linhasretornadas['tipo'];
                    $quantidade = $linhasretornadas['quantidade_estoque'];
                    $preco = $linhasretornadas['preco'];
                    echo '
                        <tr>
                            <th>'.$id.'</th>    
                            <th>'.$nome.'</th>    
                            <th>'.$tipo.'</th>    
                            <th>'.$quantidade.'</th>    
                            <th>'.$preco.'</th>
                            <th><button><a href="editar_prod.php?id='.$id.'">Editar</a></button></th>
                            <th><button><a href="excluir_prod.php?id='.$id.'">Excluir</a></button></th>
                        </tr>    
                    ';
                }
            }
        ?>
    </table>
</body>
</html>