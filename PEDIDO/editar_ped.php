<?php

include "../connect/connect.php";
include "../nav-bar.php";

$sql1 = "SELECT * FROM cliente";
$query1 = mysqli_query($conn,$sql1);

$sql = "SELECT * FROM produtos";
$query = mysqli_query($conn, $sql);

if(isset($_GET['idped'])){
    
    $id = $_GET['idped'];
    
    $consulta = "SELECT * FROM pedido WHERE id_pedi = $id";
    
    $resultado_consulta = mysqli_query($conn, $consulta);
    
    $pedido = mysqli_fetch_assoc($resultado_consulta); 
    
}else{
    header('location:listar_ped.php');
}

if(isset($_POST['editar'])){
    $id_clie = $_POST['id_clie'];
    $id_prod = $_POST['id_prod'];
    $data = $_POST['data_pedi'];
    $situacao = $_POST['situacao'];

    $consulta = "UPDATE pedido SET id_clie='$id_clie', id_prod='$id_prod', data_pedi='$data', situacao='$situacao' WHERE id_pedi= $id";

    $resultado_consulta = mysqli_query($conn,$consulta);

    if($resultado_consulta){
        echo ' <script> alert("Pedido editado com sucesso!") </script> ';
        echo "<meta http-equiv='refresh' content='0.3;URL=./listar_ped.php'/> ";
    }else{
        echo 'Erro ao editar pedido';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR_PEDIDOS_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Editar Pedido</h1>

    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST">
                    
            <div class="form-group">
            <h4>CLIENTE</h4>
                <select name="id_clie" id="id_clie">
                <option value="null" selected> Editar cliente: </option>
                    <?php
                        while($row = mysqli_fetch_assoc($query1)){
                            echo '
                                <option value=" '.$row["id_clie"].' ">  '.$row["nome_cli"].' </option>
                            ';
                        }
                    ?>
                </select>    
            </div>

            <div class="form-group">
                <h4>PRODUTO</h4>
                <select name="id_prod" id="id_prod">
                <option value="null" selected> Editar produto: </option>
                    <?php
                        while($row = mysqli_fetch_assoc($query)){
                            echo '
                                <option value=" '.$row["id_prod"].' ">  '.$row["nome"].' </option>
                            ';
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <h4>DATA</h4>
                <input class="form-control" type="date" name="data_pedi" id="data_pedi" placeholder="Editar data:  " value=<?php echo $pedido['data_pedi']; ?>>
            </div>

            <div class="form-group">
                <h4>SITUAÇÃO</h4>  
                <select class="form-control" name="situacao" id="situacao" value=<?php echo $pedido['situacao']; ?>>
                    <option value="Pago">Pago</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
            </div>

            
            
            <button class="btn btn-danger" type="reset" name="cancelar">Cancelar</button>
            <button class="btn btn-success" type="submit" name="editar" value="editar">EDITAR PEDIDO</button>
        </form>
    </div>
</body>
</html>
<!-- 
        // $nome = $linha_retornada['nome'];
        // $tipo = $linha_retornada['tipo'];
        // $quantidade = $linha_retornada['quantidade_estoque'];
        // $preco = $linha_retornada['preco']; -->