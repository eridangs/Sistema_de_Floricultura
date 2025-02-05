<?php

include("connect.php");

if(isset($_POST['cadastrar']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conn, trim($_POST['telefone']));
$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf'])); 

$sql = "INSERT INTO cliente(nome,telefone,cpf) VALUES('$nome', '$telefone','$cpf')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';
}else{
    echo 'Erro ao cadastrar';
}
?>