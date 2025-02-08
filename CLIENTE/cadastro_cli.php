<?php

include("../connect/connect.php");

if(isset($_POST['cadastrar']));
$nome_cli = mysqli_real_escape_string($conn, trim($_POST['nome_cli']));
$telefone = mysqli_real_escape_string($conn, trim($_POST['telefone']));
$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf'])); 

$sql = "INSERT INTO cliente(nome_cli,telefone,cpf) VALUES('$nome_cli', '$telefone','$cpf')";

$result = mysqli_query($conn,$sql);

if($result){
    echo ' <script> alert("Cliente cadastrado com sucesso!") </script> ';
    echo "<meta http-equiv='refresh' content='0.3;URL=./listar_cli.php'/> ";
}else{
    echo 'Erro ao cadastrar';
}
?>