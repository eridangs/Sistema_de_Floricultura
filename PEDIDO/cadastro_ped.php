<?php

    include "../connect/connect.php";

    if(isset($_POST['cadastrar']));
    $id_clie = mysqli_real_escape_string($conn, trim($_POST['id_clie']));;
  
    $data_pedi = mysqli_real_escape_string($conn, trim($_POST['data']));
    $situacao = mysqli_real_escape_string($conn, trim($_POST['situacao']));
    $total = 1;

    $consulta = "INSERT INTO pedido(id_clie,data_pedi,situacao) VALUES('$id_clie', '$data_pedi','$situacao')";

    $resultado_consulta = mysqli_query($conn,$consulta);

    if($resultado_consulta){
        echo ' <script> alert("Cadastrado com sucesso!") </script> ';
        echo "<meta http-equiv='refresh' content='0.3;URL=./listar_ped.php'/> ";
    }else{
        echo 'Erro ao cadastrar';
    }
?>

