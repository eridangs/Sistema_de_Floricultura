<?php

include("connect.php");

if(isset($_POST['cadastrar']));
$nome_cli = mysqli_real_escape_string($conn, trim($_POST['nome_cli']));
$telefone = mysqli_real_escape_string($conn, trim($_POST['telefone']));
$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf'])); 

$sql = "INSERT INTO cliente(nome_cli,telefone,cpf) VALUES('$nome_cli', '$telefone','$cpf')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';
}else{
    echo 'Erro ao cadastrar';
}
?>