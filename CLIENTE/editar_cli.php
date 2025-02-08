<?php

include "../connect/connect.php";
include "../nav-bar.php";


if(isset($_GET['idcli'])){

    $id = $_GET['idcli'];

    $consulta = "SELECT * FROM cliente WHERE id_clie = $id";

    $resultado_consulta = mysqli_query($conn, $consulta);

    $cliente = mysqli_fetch_assoc($resultado_consulta); 
}else{
    header('location:listar_cli.php');
}


if(isset($_POST['editar'])){
    $nome = $_POST['nome_cli'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    $consulta2 = "UPDATE cliente SET nome='$nome', telefone= '$telefone', cpf= '$cpf' WHERE id_clie= $id";

    $resultado_consulta2 = mysqli_query($conn,$consulta2);

    if($resultado_consulta2){
        echo ' <script> alert("Cliente editado com sucesso!") </script> ';
        echo "<meta http-equiv='refresh' content='0.3;URL=./listar_cli.php'/> ";
    }else{
        echo 'Erro ao editar cliente';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR_PRODUTOS_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Editar Cliente</h1>

    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST">

            <div class="form-group">
                <h4>NOME</h4>
                <input type="text" class="form-control" name="nome_cli" id="nome_cli" placeholder="Editar nome: " value=<?php echo $cliente['nome_cli']; ?>>
            </div>

            <div class="form-group">
                <h4>TELEFONE</h4>            
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Editar telefone: " value=<?php echo $cliente['telefone']; ?>>
            </div>

            <div class="form-group">
                <h4>CPF</h4>            
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Editar cpf: " value=<?php echo $cliente['cpf']; ?>>      
            </div>
            
            <button class="btn btn-danger" type="reset" name="cancelar">Cancelar</button>
            <button class="btn btn-success" type="submit" name="editar" value="editar">EDITAR CLIENTE</button>
        </form>
    </div>
</body>
</html>